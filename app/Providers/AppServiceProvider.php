<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\ClientLogos;
use App\Models\General;
use App\Models\Products;
use App\Models\Tag;
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
            $view->with(['userDetail'=> $userDetail, 'user'=> $user]);
        });
        View::composer('components.public.header', function ($view) {

            $datosgenerales = General::all();
            $blog = Blog::where('status', '=', 1)->where('visible', '=', 1)->count(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            $categoriasMenu = Category::where('visible', '=', 1)->get();

            $categorias = Category::where("status", "=", true)->with(['subcategories' => function ($query) {
                $query->whereHas('products');
            }])->get();

            $marcas = ClientLogos::where('status', true)->where('visible', true)->get();

            $tags = Tag::where('is_menu', 1)
            ->where("status", "=", true)
            ->where("visible", "=", true)
            ->whereHas('productos')
            ->get();

            $offerExists = Products::where('status', true)
            ->where('descuento', '>', 0)
                ->exists();

            // Pasar los datos a la vista
            $view->with([
                'datosgenerales' => $datosgenerales,
                'blog' => $blog,
                'categoriasMenu' => $categoriasMenu,
                'tags' => $tags,
                'marcas' => $marcas,
                'offerExists' => $offerExists,
                'categorias' => $categorias,
            ]);
        });


         PaginationPaginator::useTailwind();   
    }
}
