<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Notifikasi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // definisi macro baru
        Blueprint::macro('withUserAudit', function () {
            $this->string('created_by', 12)->nullable();
            $this->string('modified_by', 12)->nullable();
        });

        View::composer('*', function ($view) {
            $user = Auth::user();

            $query = Notifikasi::with('kunjungan')->orderBy('waktu_notifikasi', 'desc');

            if ($user && $user->role === 'Resepsionis') {
                $query->whereHas('kunjungan', function ($q) {
                    $q->whereIn('status', ['Menunggu', 'Selesai', 'Dibatalkan']);
                });
            } elseif ($user && $user->role === 'Satpam') {
                $query->whereHas('kunjungan', function ($q) {
                    $q->whereIn('status', ['Sedang berlangsung', 'Dibatalkan', 'Sudah bertemu']);
                });
            }

            $notifikasi = $query->get();
            
            $iconMap = [
                'Menunggu' => [
                    'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fad230" class="p-1 bg-[#fbfbe8] rounded-full size-8"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" /></svg>',
                    'fill' => '#fad230',
                    'bg'   => '#fbfbe8',
                ],
                'Sedang berlangsung' => [
                    'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3171da" class="p-1 bg-[#e9e8fb] rounded-full size-8"><path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" /></svg>',
                    'fill' => '#3171da',
                    'bg'   => '#e9e8fb',
                ],
                'Selesai' => [
                    'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#59d257" class="p-1 bg-[#e8fbe8] rounded-full size-8"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" /></svg>',
                    'fill' => '#59d257',
                    'bg'   => '#e8fbe8',
                ],
                'Dibatalkan' => [
                    'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd" /></svg>',
                    'fill' => '#ef4444',
                    'bg'   => '#fef2f2',
                ],
                'Sudah bertemu' => [
                    'svg'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#59d257" class="p-1 bg-[#e8fbe8] rounded-full size-8"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" /></svg>',
                    'fill' => '#59d257',
                    'bg'   => '#e8fbe8',
                ],
            ];

            // tempel ikon ke tiap notifikasi (tanpa menghasilkan variabel $n di luar)
            $notifikasi->transform(function ($item) use ($iconMap) {
                $status = $item->kunjungan->status ?? null;
                $item->icon = $status && isset($iconMap[$status]) ? $iconMap[$status] : null;
                return $item;

                
            });

            // ambil 2 terbaru
            $latestTwo = $notifikasi->take(2);

            $unreadCount = $notifikasi->where('dibaca', false)->count();

            $view->with([
                'notifikasi' => $notifikasi,
                'latestTwo'  => $latestTwo,
                'unreadCount'=> $unreadCount,
            ]);
        });
    }

}
