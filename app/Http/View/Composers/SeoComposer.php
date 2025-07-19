<?php

namespace App\Http\View\Composers;

use App\Models\General;
use Illuminate\View\View;

class SeoComposer
{
    /**
     * The general data instance.
     *
     * @var General
     */
    protected $general;

    /**
     * Create a new seo composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Recuperar la configuración general (asumiendo que hay un único registro con ID=1)
        $this->general = General::find(1);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('general', $this->general);
    }
}
