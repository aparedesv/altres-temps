<?php

namespace App\View\Composers;

use App\Models\Year;
use Illuminate\View\View;

class YearComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $years = Year::all();
        $view->with('years', $years);
    }
}
