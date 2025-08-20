<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kunjungan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

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
    
    /* Untuk mengambil data kunjungan dan ditampilkan ke tabel kunjungan pada dashboard dan halaman daftar kunjungan */
    public function loadKunjunganTable(Request $request) {
        $data = Kunjungan::with(['karyawan.divisi'])
            ->select('kunjungan_tr.*')
            ->orderBy('tanggal_kunjungan', 'desc');
            
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

                if(session('role') === 'Satpam'){
                    $html .='
                    <a id="selesai-kunjungan">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg> 
                    </a>';
                }
                
                $html .= '
                <a id="lihat-kunjungan" href="'.route('kunjungan.lihatKunjungan', $row->id_kunjungan).'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>';
                
                if(session('role') === 'Satpam'){
                    $html .= '
                    <a id="batal-kunjungan">
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
    
    /* Untuk mengambil data kunjungan terbanyak dan ditampilkan ke tabel top kunjungan pada dashboard */
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
    
    public function tambahKunjungan(){
        return view('formKunjungan');
    }
    
    public function lihatKunjungan($id_kunjungan){
        $kunjungan = Kunjungan::with(['karyawan.divisi', 'satpam.karyawan', 'resepsionis.karyawan'])->findOrFail($id_kunjungan);
        // dd($kunjungan->toArray());
        return view('detailKunjungan', compact('kunjungan'));
    }
}
