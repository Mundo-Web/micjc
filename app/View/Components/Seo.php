<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Seo extends Component
{
    public $title;
    public $description;
    public $keywords;
    public $ogTitle;
    public $ogDescription;
    public $ogImage;
    public $canonicalUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $description = null,
        $keywords = null,
        $ogTitle = null,
        $ogDescription = null,
        $ogImage = null,
        $canonicalUrl = null
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->ogTitle = $ogTitle ?: $title;
        $this->ogDescription = $ogDescription ?: $description;
        $this->ogImage = $ogImage;
        $this->canonicalUrl = $canonicalUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.seo');
    }
}
