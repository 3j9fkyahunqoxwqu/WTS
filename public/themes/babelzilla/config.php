<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
                // You can remove this line anytime.
                //$theme->setTitle('Copyright ©  2013 - Laravel.in.th');

                // Breadcrumb template.
                // $theme->breadcrumb()->setTemplate('
                //     <ul class="breadcrumb">
                //     @foreach ($crumbs as $i => $crumb)
                //         @if ($i != (count($crumbs) - 1))
                //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
                //         @else
                //         <li class="active">{{ $crumb["label"] }}</li>
                //         @endif
                //     @endforeach
                //     </ul>
                // ');
            },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
                // You may use this event to set up your assets.
                // $theme->asset()->usePath()->add('core', 'core.js');
                // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
                $theme->asset()->add('core_css', 'themes/babelzilla/assets/css/foundation.css');
                $theme->asset()->add('app_css', 'themes/babelzilla/assets/css/app.css');
                $theme->asset()->add('main_css', 'themes/babelzilla/assets/css/main.css');
                $theme->asset()->add('buttons_css', 'themes/babelzilla/assets/css/buttons.css');
                $theme->asset()->add('dataTables_css', 'themes/babelzilla/assets/css/jquery.dataTables.css');
                $theme->asset()->add('dataTablesF_css', 'themes/babelzilla/assets/css/dataTables.foundation.css');
                $theme->asset()->add('awesome_css', 'themes/babelzilla/assets/css/font-awesome.css');
                $theme->asset()->add('style_css', 'themes/babelzilla/assets/css/style.css');
                $theme->asset()->add('octicon_icons', 'themes/babelzilla/assets/fonts/octicons.css');

                // Partial composer.
                // $theme->partialComposer('header', function($view)
                // {
                //     $view->with('auth', Auth::user());
                // });
            },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function ($theme) {
                    // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
                }

        )

    )

);