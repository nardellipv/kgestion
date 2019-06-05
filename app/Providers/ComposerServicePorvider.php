<?php

namespace kindergestion\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class ComposerServicePorvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['school.menu.menu'], 'kindergestion\Http\CounterView\CounterMails');

        View::composer(['tutor.menu.menu'], 'kindergestion\Http\CounterView\CounterMailsTutor');

        View::composer(['school.menu.menu'], 'kindergestion\Http\CounterView\CounterCircular');

        View::composer(['tutor.menu.menu'], 'kindergestion\Http\CounterView\CounterCircular');

        View::composer(['layouts.nav'], 'kindergestion\Http\CounterView\CounterMails');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
