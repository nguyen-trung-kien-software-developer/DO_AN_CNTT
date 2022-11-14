<?php

namespace App\Providers;

use App\Http\View\Composers\Admin\FooterComposer as AdminFooterComposer;
use App\Http\View\Composers\Admin\HeadComposer as AdminHeadComposer;
use App\Http\View\Composers\Admin\HeaderComposer as AdminHeaderComposer;
use App\Http\View\Composers\Admin\SideBarComposer;
use App\Http\View\Composers\Site\FooterComposer;
use App\Http\View\Composers\Site\HeaderComposer;
use App\Http\View\Composers\Site\LeftSideBarComposer;
use App\Http\View\Composers\Site\HeadComposer;
use App\Http\View\Composers\Site\MenuComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // site composers
        View::composer('site.layout.header', HeaderComposer::class);
        View::composer('site.layout.head', HeadComposer::class);
        View::composer('site.layout.footer', FooterComposer::class);
        View::composer('site.layout.menu', MenuComposer::class);
        View::composer('site.layout.leftSideBar', LeftSideBarComposer::class);

        // admin composers
        View::composer('admin.layout.header', AdminHeaderComposer::class);
        View::composer('admin.layout.head', AdminHeadComposer::class);
        View::composer('admin.layout.sidebar', SideBarComposer::class);
        View::composer('admin.layout.footer', AdminFooterComposer::class);
    }
}