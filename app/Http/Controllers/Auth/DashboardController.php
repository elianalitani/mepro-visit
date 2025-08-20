<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {   
        /* Data jumlah pengunjung setiap bulan selama satu tahun juga dikirim ke dashboard */
        $monthlyData = $this->getChartByYear(now()->year);
        
        return view('dashboard', [
            'monthlyData' => array_values($monthlyData),
            'defaultYear' => now()->year
        ]);
    }
    
    /* getChartByYear: menampilkan chart pada dashboard sesuai default (tahun saat ini) */
    public function getChartByYear($year)
    {
        $data = DB::table('kunjungan_tr')
            ->selectRaw('EXTRACT(MONTH FROM tanggal_kunjungan)::int as month, COUNT(*) as total')
            ->whereRaw('EXTRACT(YEAR FROM tanggal_kunjungan) = ?', [$year])
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');
            
        $result = array_fill(1, 12, 0);
        foreach ($data as $month => $total){
            $result[$month] = $total;
        }
        
        return array_values($result);
    }
    
    /* getKunjunganChart: menampilkan chart pada dashboard sesuai pilihan tahun */
    public function getKunjunganChart($year)
    {
        return response()->json($this->getChartByYear($year));
    }
}
