<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Divisi;
use App\Models\Karyawan;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class AkunController extends Controller
{
    public function index(){
        $user = Auth::user()->load('karyawan');
        
        return view('admin.daftarAkun');
    }
    
    /* loadAkunTable: untuk mengambil data akun dan ditampilkan ke tabel akun pada halaman daftar akun */
    public function loadAkunTable(Request $request) {
        $data = User::with('karyawan')
            ->select('user_tr.*');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('nama_karyawan', function($row) {
                return '<div class="px-4 py-3 font-bold text-left">'.
                    ($row->karyawan->nama ?? '-').
                    '</div>';
            })
            ->editColumn('role', function($row) {
                return '<div class="px-4 py-3 font-bold text-center">'.$row->role.'</div>';
            })
            ->editColumn('created_at', function($row) {
                return '<div class="px-4 py-3 font-bold text-center">'.
                    \Carbon\Carbon::parse($row->created_at)->format('d-m-Y'). ' '.
                    \Carbon\Carbon::parse($row->created_at)->format('H:i').
                    '</div>';
            })
            ->editColumn('updated_at', function($row) {
                return $row->updated_at ?
                '<div class="px-4 py-3 font-bold text-center">'.
                    \Carbon\Carbon::parse($row->updated_at)->format('d-m-Y'). ' '.
                    \Carbon\Carbon::parse($row->updated_at)->format('H:i').
                    '</div>' : '<div class="text-center"> - </div>';
            })
            ->editColumn('status', function($row) {
                return '<div class="px-4 py-3 font-bold text-left">'.$row->status.'</div>';
            })
            ->editColumn('aksi', function($row) { 
                return '<div class="flex flex-row gap-2 justify-center items-center text-center"> 
                    <a id="edit-akun"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>                  
                    </a>     
                    <a id="lihat-akun" href="'.route('akun.lihatAkun', $row->id_user).'"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4"> 
							<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
						</svg>
					</a>
					<a href="javascript:void(0)" 
                        class="btn-reset-akun text-black-600"
                        data-id="'.$row->id_user.'"
                        data-email="'.($row->karyawan->email ?? '').'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg> 
                    </a>
					</div>';
					})
            ->rawColumns(['nama_karyawan','role','created_at', 'updated_at', 'status', 'aksi'])
            ->make(true);
    }
    
    /* lihatAkun: melihat detail akun */
    public function lihatAkun($id_user){
       $akun = User::with('karyawan') 
                ->where('id_user', $id_user)
                ->firstOrFail();
        // dd($akun->toArray());
        return view('admin.detailAkun', compact('akun'));
    }
    
    /* NOTE: yang perlu dikerjakan untuk membuat dan mengedit akun di sini
     * untuk apa saja yang diambil dari database dapat mengecek Models/Akun.php
     * jangan lupa tambahkan komentar jika perlu
     */
    
    /* tambahAkun: membuat akun baru */
    public function tambahAkun(){
        // mengambil data karyawan dari database
        $karyawan = Karyawan::whereIn('id_divisi', ['DV01', 'DV02'])->get();
        // mengambil data divisi dari database
        return view('admin.formAkun', compact('karyawan'));
    }

    public function simpanAkun(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required|exists:karyawan_mt,nip',
            'role' => 'required|string',
            'username' => 'required|string|unique:user_tr,username',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $lastUser = User::orderBy('id_user', 'desc')->first();

        if ($lastUser) {
            $lastNumber = (int) substr($lastUser->id_user, 1);
            $newId = 'U' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newId = 'U001';
        }

        $karyawan = Karyawan::findOrFail($request->id_karyawan);

        $user = new User();
        $user->id_user     = $newId; 
        $user->id_karyawan = $karyawan->nip;
        $user->email       = $karyawan->email;
        $user->role        = $request->role;
        $user->username    = $request->username;
        $user->password    = Hash::make($request->password);
        $user->save();

        return redirect()->route('akun.index')
                        ->with('success', 'Akun berhasil ditambahkan!');
    }
    
    /* editAkun: mengedit detail akun */
    public function editAkun($id_user){
        $akun = User::with('karyawan')->where('id_user', $id_user)->firstOrFail();
        return view('admin.editAkun', compact('akun'));
    }

    public function updateAkun(Request $request, $id_user)
    {
        $akun = User::where('id_user', $id_user)->firstOrFail();

        $request->validate([
            'username' => 'required|string|max:255',
            'old_password' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (!\Hash::check($request->old_password, $akun->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
        }

        $akun->username = $request->username;

        if ($request->filled('password')) {
            $akun->password = bcrypt($request->password);
        }

        $akun->save();

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diupdate');
    }

    /* formAkun: untuk mengirim link reset password */
    public function formReset($id_user) {
        $akun = User::with('karyawan')->where('id_user', $id_user)->firstOrFail();
        return response()->json($akun); 
    }

    /* kirimLinkReset: mengirim link reset password */
    public function kirimLinkReset(Request $request, $id)
    {
        // Cari user (buat validasi saja, misal pastikan ID valid)
        $user = User::findOrFail($id);

        // Kirim link reset password ke email yang dimasukkan di form
        $status = \Password::sendResetLink([
            'email' => $request->email,
        ]);

        if ($status === \Password::RESET_LINK_SENT) {
            // Update kolom status_reset di tabel user_tr
            $user->update([
                'status' => 'email reset berhasil dikirim'
            ]);

            return redirect()->back()->with(
                'success',
                'Link reset password berhasil dikirim ke ' . $request->email
            );
        }

        return redirect()->back()->withErrors([
            'email' => __($status)
        ]);
    }


}
