<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
   public function index()
    {
        $user = Auth::user();

        // base query (belum di-get)
        $query = Notifikasi::with('kunjungan')
            ->orderBy('waktu_notifikasi','desc');

        // filter berdasarkan role
        if ($user->role === 'Resepsionis') {
            $query->whereHas('kunjungan', function ($q) {
                $q->whereIn('status', ['Menunggu', 'Selesai', 'Dibatalkan']);
            });
        } elseif ($user->role === 'Satpam') {
            $query->whereHas('kunjungan', function ($q) {
                $q->whereIn('status', ['Sedang berlangsung', 'Dibatalkan', 'Sudah bertemu']);
            });
        }

        // baru di-get setelah filter selesai
        $notifikasi = $query->get();

        return view('components.notifications', compact('notifikasi'));
    }

}
