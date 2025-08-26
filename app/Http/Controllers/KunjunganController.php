<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kunjungan;
use App\Models\Karyawan;
use App\Models\Notifikasi;
use App\Models\Divisi;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KunjunganController extends Controller
{
    public function index(){
        $user = Auth::user()->load('karyawan');
        
        if($user->role === 'Satpam'){
            return view('security.daftarKunjungan', compact('user'));
        }elseif($user->role === 'Resepsionis'){
            return view('receptionist.daftarKunjungan', compact('user'));
        }elseif($user->role === 'Admin'){
            return view('admin.daftarKunjungan', compact('user'));
        }
    }

    protected function baseKunjungan(Request $request){
        $data = Kunjungan::with(['karyawan.divisi'])
            ->select('kunjungan_tr.*');

        /* Filtering berdasarkan tanggal */
        if ($request->tanggal_awal && $request->tanggal_akhir) {
            $data->whereBetween('tanggal_kunjungan', [
                $request->tanggal_awal,
                $request->tanggal_akhir
            ]);
        } elseif ($request->tanggal_awal) {
            $data->whereDate('tanggal_kunjungan', '>=', $request->tanggal_awal);
        } elseif ($request->tanggal_akhir) {
            $data->whereDate('tanggal_kunjungan', '<=', $request->tanggal_akhir);
        }

        /* Filtering berdasarkan status */
        if ($request->status) {
            $data->where('status', $request->status);
        }

        /* Sorting berdasarkan abjad */
        if ($request->sort === 'asc') {
            $data->orderBy('nama_tamu', 'asc');
        } elseif ($request->sort === 'desc') {
            $data->orderBy('nama_tamu', 'desc');
        } else {
            $data->orderBy('tanggal_kunjungan', 'desc');
        }


        return $data;
    }
    
    public function getKunjungan(Request $request){
        $data = $this->baseKunjungan($request)->get();
        return response()->json($data);
    }
    
    /* loadKunjunganTable: untuk mengambil data kunjungan dan ditampilkan ke tabel kunjungan pada dashboard dan halaman daftar kunjungan */
    public function loadKunjunganTable(Request $request) {
        $data = $this->baseKunjungan($request);
            
        if($request->mode === 'dashboard') {
            $data->take(5);
        }
        
        return DataTables::of($data)
            ->editColumn('nama_tamu', function($row) {
                return '<div class="px-3 py-3 font-bold text-left">'.$row->nama_tamu.'</div>';
            })
            ->editColumn('instansi', function($row) {
                return '<div class="px-3 py-3 font-bold text-left">'.$row->instansi.'</div>';
            })
            ->editColumn('tanggal_kunjungan', function($row) {
                return '<div class="px-3 py-3 font-bold text-center">'.
                    \Carbon\Carbon::parse($row->tanggal_kunjungan)->format('d-m-Y').
                    '</div>';
            })
            ->editColumn('waktu_kedatangan', function($row) {
                return '<div class="px-3 py-3 font-bold text-center">'.
                    \Carbon\Carbon::parse($row->waktu_kedatangan)->format('H:i').
                    '</div>';
            })
            ->editColumn('waktu_kepulangan', function($row) {
                return $row->waktu_kepulangan ?
                '<div class="px-3 py-3 font-bold text-center">'.
                    \Carbon\Carbon::parse($row->waktu_kepulangan)->format('H:i').
                    '</div>' : '<div class="text-center"> - </div>';
            })
            ->addColumn('pihak_tujuan', function($row) {
                return '<div class="px-3 py-3 font-bold text-left">'.
                    ($row->karyawan->nama ?? '-').
                    '</div>';
            })
            ->addColumn('divisi', function($row) {
                return '<div class="px-3 py-3 font-bold text-center">'.
                    ($row->karyawan->divisi->nama_divisi ?? '-').
                    '</div>';
            })
            ->editColumn('status', function($row) {
                $colors = [
                    'Menunggu' => '#fad230',
                    'Sedang berlangsung' => '#3171DA',
                    'Selesai' => '#029c55',
                    'Sudah bertemu' => '#F97316',
                    'Dibatalkan' => '#E21B1B'
                ];
                $color = $colors[$row->status] ?? '#ccc';
                return '<div class="px-3 py-3">
                            <div class="p-1 border rounded-full text-center font-medium" 
                                style="border-color:'.$color.'; color:'.$color.';">
                                '.$row->status.'
                            </div>
                        </div>';
            })
            ->editColumn('aksi', function($row) {
                $html = '<div class="flex flex-row gap-2 justify-center items-center">';
                
                if(session('role') === 'Satpam' && !in_array($row->status, ['Selesai', 'Dibatalkan'])) {
                    $html .='
                    <a class="selesai-kunjungan cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg> 
                    </a>';
                }

                $html .= '
                    <a class="lihat-kunjungan" href="'.route('kunjungan.lihatKunjungan', $row->id_kunjungan).'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>';

                if(session('role') === 'Satpam' && !in_array($row->status, ['Selesai', 'Dibatalkan'])) {
                    $html .= '
                    <a class="batal-kunjungan">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>  
                    </a>';
                }

                $html .= '</div>';
                return $html;
            })
            ->rawColumns(['nama_tamu','instansi','tanggal_kunjungan', 'waktu_kedatangan', 'waktu_kepulangan', 'pihak_tujuan','divisi','status', 'aksi'])
            ->make(true);
    }
    
    /* loadTopKunjunganTable: untuk mengambil data kunjungan terbanyak dan ditampilkan ke tabel top kunjungan pada dashboard */
    public function loadTopKunjunganTable(){
        $data = Kunjungan::select('instansi', DB::raw('COUNT(instansi) as total'))
            ->groupBy('instansi')
            ->orderBy('total', 'desc')
            ->limit(10)
            ->get();
            
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('instansi', function($row) {
                return '<div class="px-4 py-1 text-center text-sm">'.$row->instansi.'</div>';
            })
            ->editColumn('total', function($row){
                return '<div class="px-4 py-1 text-center text-sm">'.$row->total.'</div>';
            })
            ->rawColumns(['instansi', 'total'])
            ->make(true);
    }
    
    /* formKunjungan: untuk menampilkan form kunjungan */
    public function formKunjungan(){
        $karyawan = Karyawan::get();
        $divisi = Divisi::get();
        
        return view('formKunjungan', compact('divisi', 'karyawan'));
    }
    
    /* tambahKunjungan: untuk menambahkan kunjungan baru */
    public function tambahKunjungan(Request $request){

        // dd($request->all());

        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'no_identitas' => 'required|string|max:100',
            'instansi' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'id_karyawan' => 'required|exists:karyawan_mt,nip',
            'id_user_satpam' => 'nullable|exists:user_tr,id_user',
            'id_user_resepsionis' => 'nullable|exists:user_tr,id_user',
        ]);
        
        $date = now()->format('Ymd');
        $random = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);

        $newId = $date . $random;

        $now = Carbon::now();
        
        $kunjungan = Kunjungan::create([
            'id_kunjungan' => $newId,
            'nama_tamu' => $request->nama_tamu,
            'no_identitas' => $request->no_identitas,
            'instansi' => $request->instansi,
            'keperluan' => $request->keperluan,
            'tanggal_kunjungan' => $now->toDateString(),
            'waktu_kedatangan' => $now->toTimeString(),
            'waktu_kepulangan' => null,
            'status' => 'Menunggu',
            'id_karyawan' => $request->id_karyawan,
            'id_user_satpam' => $request->id_user_satpam,
            'id_user_resepsionis' => $request->id_user_resepsionis,
            'is_deleted' => false,
            'created_by' => 'system',
            'modified_by' => 'system',
        ]);
        
        // dd($kunjungan->toArray());
        return redirect()->route('kunjungan.index')->with('success', 'Kunjungan berhasil terdaftar!');
    }
    
    /* editKunjungan: untuk mengedit kunjungan yang sudah ada */
    public function editKunjungan($id_kunjungan){
        $karyawan = Karyawan::get();
        $divisi = Divisi::get();

        $kunjungan = Kunjungan::with(['karyawan.divisi', 'satpam.karyawan', 'resepsionis.karyawan'])->findOrFail($id_kunjungan);
        return view('editKunjungan', compact('kunjungan', 'karyawan', 'divisi'));
    }

    public function updateKunjungan(Request $request, $id_kunjungan){
        // dd($request->all());

        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'no_identitas' => 'required|string|max:100',
            'instansi' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'id_karyawan' => 'required|exists:karyawan_mt,nip',
            'id_user_satpam' => 'nullable|exists:user_tr,id_user',
            'id_user_resepsionis' => 'nullable|exists:user_tr,id_user',
        ]);

        $kunjungan = Kunjungan::findOrFail($id_kunjungan);
        $kunjungan->update($request->all());

        return redirect()->route('kunjungan.lihatKunjungan', $id_kunjungan)->with('success', 'Data kunjungan berhasil diperbarui.');
    }

    public function lihatKunjungan($id_kunjungan){
        $kunjungan = Kunjungan::with(['karyawan.divisi', 'satpam.karyawan', 'resepsionis.karyawan'])->findOrFail($id_kunjungan);
        Notifikasi::where('id_kunjungan', $id_kunjungan)->update(['dibaca' => true]);
        // dd($kunjungan->toArray());
        return view('detailKunjungan', compact('kunjungan'));
    }

    public function selesaiKunjungan(Request $request, $id_kunjungan){
        $kunjungan = Kunjungan::findOrFail($id_kunjungan);
        $kunjungan->status = 'Selesai';
        $kunjungan->save();
        
        return redirect()->route('kunjungan.index')->with('success', 'Kunjungan berhasil diselesaikan.');
    }

    public function batalKunjungan(Request $request, $id_kunjungan){
        $now = Carbon::now();

        $kunjungan = Kunjungan::findOrFail($id_kunjungan);
        $kunjungan->status = 'Dibatalkan';
        $kunjungan->deskripsi = $request->deskripsi;
        $kunjungan->save();

        return redirect()->route('kunjungan.index')->with('success', 'Berhasil membatalkan kunjungan.');
    }

    public function searchKaryawan(Request $request)
    {
        $keyword = $request->keyword;
        $result = Karyawan::where('nama', 'like', "%{$keyword}%")->get();
        return response()->json($result);
    }
}
