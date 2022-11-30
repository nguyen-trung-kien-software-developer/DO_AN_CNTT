<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            # Admin
            Route::middleware('web')->prefix('/admin')->name('admin.')->group(function () {
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/admin/index.php'));

                Route::prefix('/users')->name('users.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/users.php'));
                });

                #dashboard
                Route::group(['middleware' => ['permission:Tổng quan']], function () {
                    Route::prefix('/tong-quan')->name('dashboard.')->group(function () {
                        Route::namespace($this->namespace)
                            ->group(base_path('routes/web/admin/dashboard.php'));
                    });
                });

                #order
                Route::prefix('/don-hang')->name('order.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/order.php'));
                });

                #orderItem
                // Route::prefix('/he-thong-don-hang')->name('orderItem.')->group(function () {
                //     Route::namespace($this->namespace)
                //         ->group(base_path('routes/web/admin/orderItem.php'));
                // });

                #product
                Route::prefix('/san-pham')->name('product.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/product.php'));
                });

                #image
                Route::prefix('/hinh-anh')->name('image.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/image.php'));
                });

                #comment
                Route::prefix('/danh-gia')->name('comment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/comment.php'));
                });

                #introduction
                Route::prefix('/bai-gioi-thieu')->name('introduction.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/introduction.php'));
                });

                #parentCategory
                Route::prefix('/danh-muc-chinh')->name('parentCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/parentCategory.php'));
                });

                #subCategory
                Route::prefix('/danh-muc-phu')->name('subCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/subCategory.php'));
                });

                #brand
                Route::prefix('/thuong-hieu')->name('brand.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/brand.php'));
                });

                #blog
                Route::prefix('/tin-tuc')->name('blog.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/blog.php'));
                });

                #transport
                Route::prefix('/van-chuyen')->name('transport.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/transport.php'));
                });

                #discountCode
                Route::prefix('/ma-giam-gia')->name('discountCode.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/discountCode.php'));
                });

                #slider
                Route::prefix('/slider')->name('slider.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/slider.php'));
                });

                #page
                Route::prefix('/trang-thong-tin')->name('page.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/page.php'));
                });

                #company
                Route::prefix('/cua-hang')->name('company.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/company.php'));
                });

                #branch
                Route::prefix('/chi-nhanh')->name('branch.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/branch.php'));
                });

                #consultant
                Route::prefix('/ho-tro-tu-van')->name('consultant.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/consultant.php'));
                });

                #customer
                Route::prefix('/khach-hang')->name('customer.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/customer.php'));
                });

                #orderStatus
                Route::prefix('/tinh-trang-don-hang')->name('orderStatus.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/orderStatus.php'));
                });

                #shippingStatus
                Route::prefix('/tinh-trang-giao-hang')->name('shippingStatus.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/shippingStatus.php'));
                });

                #staff
                Route::prefix('/thanh-vien')->name('staff.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/staff.php'));
                });

                # permission
                Route::prefix('/phan-quyen')->name('permission.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/permission.php'));
                });

                #package
                Route::prefix('/package')->name('package.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/package.php'));
                });

                #ajax
                Route::prefix('/ajax')->name('ajax.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/ajax.php'));
                });
            });

            # Site
            Route::middleware('web')->prefix('/')->name('site.')->group(function () {
                #home
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/site/index.php'));

                #search
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/site/search.php'));

                #page
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/site/page.php'));

                #consultant
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/site/consultant.php'));

                #comment
                Route::prefix('/danh-gia-san-pham')->name('comment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/comment.php'));
                });

                #introduction
                Route::prefix('/{parentCategorySlug}/gioi-thieu')->name('introduction.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/introduction.php'));
                });

                #branch
                Route::name('branch.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/branch.php'));
                });

                #payment
                Route::name('payment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/payment.php'));
                });

                #blog
                Route::name('blog.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/blog.php'));
                });

                #cart
                Route::name('cart.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/cart.php'));
                });

                #customer
                Route::name('customer.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/customer.php'));
                });

                #contact
                Route::name('contact.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/contact.php'));
                });


                #parentCategory
                Route::prefix('/{parentCategorySlug}.html')->name('parentCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/parentCategory.php'));
                });

                #product
                Route::prefix('/san-pham')->name('product.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/product.php'));
                });

                #subCategory
                Route::prefix('/{parentCategorySlug}')->name('subCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/subCategory.php'));
                });

                #ajax
                Route::prefix('/ajax')->name('ajax.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/ajax.php'));
                });
            });

            #Email verification
            Route::namespace($this->namespace)
                ->group(base_path('routes/web/site/verify.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}