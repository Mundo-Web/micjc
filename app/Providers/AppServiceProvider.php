<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\General;
use App\Models\UserDetails;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $datosgenerales = General::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista
            $view->with('datosgenerales', $datosgenerales);
        });

        View::composer('components.sidebarMiCuenta', function ($view) {

            $user = auth()->user();
            $userDetail = UserDetails::where('email', $user->email)->first();
            $view->with(['userDetail' => $userDetail, 'user' => $user]);
        });
        View::composer('components.public.header', function ($view) {

            $user = auth()->user();
            $userDetail = [];
            if (isset($user)) {
                $userDetail = UserDetails::where('email', $user->email)->first();
            }

            $blogCount = Blog::all()->count();
            $general = General::all()->first();
            $view->with([
                'userDetail' => $userDetail,
                'user' => $user,
                'blogCount' => $blogCount,
                'general' => $general
            ]);
        });


        PaginationPaginator::useTailwind();
    }
}
