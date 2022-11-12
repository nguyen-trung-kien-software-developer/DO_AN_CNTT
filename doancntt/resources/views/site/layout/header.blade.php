<header>
    <div class="container" id="header_mobile">
        <div class="left-container">
            <div class="menu_mobi_click_add"> <span class="mobile__menu__1__add"></span> </div>
            <ul class="category-list menu-list category-list--cms-menu">
                <li class="category-list__listItem category-list__listItem--cms-menu" style="display: none;"> <a
                        href="{{ route('site.home') }}"></a> </li>
                <li>
                    <a href="tel:{{ $headerData->company->hotline }}">
                        <p class="icon_phone_mb"></p>
                        <b style="display: inline-block;margin-top: 5px">
                            Hotline :
                            <p>{{ $headerData->company->hotline }}</p>
                        </b>
                    </a>
                </li>

                @if (Auth::guard('customer')->check())
                    <li style="user-select: auto;"> <a href="{{ route('site.customer.accountInformation') }}"
                            style="user-select: auto;">
                            <p class="icon_dk_mb" style="user-select: auto;"></p><b
                                style="display: inline-block; margin-top: 5px; user-select: auto;">{{ Auth::guard('customer')->user()->name }}</b>
                        </a> </li>
                    <li style="user-select: auto;">
                        <form action="{{ route('site.customer.logout') }}" class="logout-form" method="POST">
                            @csrf
                            <button type="submit" class="log_out">
                                <p class="icon_dx_mb" style="user-select: auto;"></p><b
                                    style="display: inline-block; margin-top: 5px; user-select: auto;">Thoát</b>
                            </button>

                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('site.customer.register') }}">
                            <p class="icon_dk_mb" style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)">
                            </p>
                            <b style="display: inline-block;margin-top: 5px">Đăng ký </b>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('site.customer.login') }}">
                            <p class="icon_dn_mb" style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)">
                            </p>
                            <b style="display: inline-block;margin-top: 5px">Đăng nhập</b>
                        </a>
                    </li>
                @endif

                <li style="float: left;width: 100%;background: #e8eaee;height: 20px"></li>
                <li>
                    <a href="https://nhansamthinhphat.com">
                        <p class="icon_home_mb" style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)"></p>
                        <b style="display: inline-block;margin-top: 5px">Trang chủ</b>
                    </a>
                </li>
                <li style="display: none;">
                    <a href="{{ route('site.home') }}">
                        <p class="icon_home_mb"></p>
                        Trang chủ
                    </a>
                </li>
                @foreach ($headerData->parentCategories as $parentCategory)
                    @if ($parentCategory->id == 1)
                        <li>
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                class="active"> <span class="icon_fonts_menu fa-solid fa-copyright"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)"> </span>
                                <b>{{ $parentCategory->name }}</b> </a><i class="fa fa-plus toogle_cate"
                                aria-hidden="true" data-id="7"></i>
                            <ul id="cate_7">
                                @if (!empty($parentCategory->introduction_id))
                                    <li><a
                                            href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}">{{ $parentCategory->introduction->title }}</a>
                                    </li>
                                @endif
                                <li><a href="{{ route('site.samNuiHanQuoc') }}">Sâm núi Hàn Quốc</a></li>
                                <li><a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">Sản
                                        Phẩm của {{ $parentCategory->name }}</a> </li>
                            </ul>
                        </li>
                        @php
                            continue;
                        @endphp
                    @endif

                    @if (!empty($parentCategory->introduction_id))
                        <li>
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"> <span
                                    class="icon_fonts_menu fa-solid fa-copyright"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)"> </span>
                                <b>{{ $parentCategory->name }}</b> </a><i class="fa fa-plus toogle_cate"
                                aria-hidden="true" data-id="2"></i>
                            <ul id="cate_2">
                                <li><a
                                        href="{{ route('site.introduction.show', [$parentCategory->slug, $parentCategory->introduction->slug]) }}">{{ $parentCategory->introduction->title }}</a>
                                </li>
                                <li><a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}">Sản
                                        Phẩm của
                                        {{ $parentCategory->name }}</a> </li>

                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"> <span
                                    class="icon_fonts_menu fa-solid fa-copyright"
                                    style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)"> </span>
                                <b>{{ $parentCategory->name }}</b> </a><i class="fa fa-plus toogle_cate"
                                aria-hidden="true" data-id="4"></i>
                            <ul id="cate_4">
                                @foreach ($parentCategory->subCategories as $subCategory)
                                    <li><a
                                            href="https://nhansamthinhphat.com/nam-linh-chi-han-quoc.html">{{ $subCategory->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

                <li> <a href="{{ route('site.blog.index') }}"> <span class="icon_fonts_menu fa-solid fa-newspaper"
                            style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)"> </span> <b>Tin tức</b>
                    </a> </li>
                <li> <a href="{{ route('site.branch.index') }}"> <span class="icon_fonts_menu fa-solid fa-store"
                            style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)"> </span> <b>Hệ thống</b>
                    </a> </li>
                <li> <a href="{{ route('site.contact.index') }}"> <span class="icon_fonts_menu fa-solid fa-phone"
                            style="color:rgb(31, 188, 0);border:1px solid rgb(31, 188, 0)"> </span> <b>Liên hệ</b>
                    </a> </li>

            </ul>
            <div style="float: left;width: 100%;height: 200px"></div>
        </div>
        <div class="main-container">
            <header class="c-header-mobile mobile_filter_sort_mobile">
                <span id="c-header-mobile__menu" onclick="hide_menu();" data="1" class="c-header-mobile__menu">
                    <span class="c-header-mobile__menu-icon"></span> </span>
                </span> <a href="{{ route('site.cart.show') }}" id="c-header-mobile__cart"
                    class="c-header-mobile__cart"> <span id="c-header-mobile__cart-item"
                        class="c-header-mobile__cart-item">{{ !empty($headerData->carts) && count($headerData->carts) > 0 && count($headerData->carts) > Cart::instance('wishlist')->count() ? count($headerData->carts) : Cart::instance('wishlist')->count() }}</span>
                </a>

                <a class="c-header-mobile__logo" href="{{ route('site.home') }}">
                    @php
                        $logo = $headerData->company->logo;
                    @endphp
                    <img src="{{ asset("storage/uploads/$logo") }}" alt="" width="65" style="height: auto">
                </a>

                <div id="filter_sort_mobile">
                    <div class="filter_mobile"> <a href="javascript:;"> <i class="fa fa-filter"
                                aria-hidden="true"></i> <span>Bộ lọc</span> </a> </div>
                    <div class="sort_mobile"> <a href="javascript:;"> <i class="fa fa-long-arrow-down"
                                aria-hidden="true"></i> <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                            <span>Sắp xếp</span> </a> </div>
                </div>
            </header>
            <div id="frm_search_mobile">
                <form action="{{ route('site.searchProduct') }}" class="clearfix"> <input type="text" name="q"
                        value="" placeholder="Tìm kiếm sản phẩm" required=""> <button class="submit"
                        id="btn_search"><i class="fa fa-search" aria-hidden="true"></i></button> </form>
            </div>

        </div>
    </div>
    <div id="header1">
        <div class="header1 clearfix">
            <div id="logo">
                <a href="{{ route('site.home') }}" class="logo_pc">
                    @php
                        $logo = $headerData->company->logo;
                    @endphp
                    <img src="{{ asset("storage/uploads/$logo") }}" alt="" width="120" height="120">
                </a>
            </div>
            <div class="menu_hide">
                <div class="cate_home">
                    <p class="cate_parent_name">Danh mục sản phẩm</p>
                </div>
                <ul class="hide_ul_menu">
                    @foreach ($headerData->parentCategories as $parentCategory)
                        <li class="menu_li_left">
                            <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                                title="{{ $parentCategory->name }}">
                                <span class="icon_fonts_menu fa-solid fa-copyright"
                                    style="color: rgb(31, 188, 0); border: 1px solid rgb(31, 188, 0)">
                                </span>
                                <b>{{ $parentCategory->name }}</b> <i class="icon_arow_1"></i>
                            </a>
                            <div class="sub_menu_left_12">
                                <div class="sub_menu_left_1_1">
                                    {!! App\Helpers\MenuHelper::renderSubCategoryList($parentCategory->subCategories) !!}
                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="search_heder">
                <form id="form_search" name="form_search" action="{{ route('site.searchProduct') }}">
                    <div class="input-group">
                        <select class="select_search_header" name="cate" id="s_cate">
                            <option value="" {{ empty(request()->input('cate')) ? 'selected' : '' }}>Tất cả</option>
                            @foreach ($headerData->parentCategories as $parentCategory)
                                <option value="{{ $parentCategory->id }}"
                                    {{ request()->input('cate') == $parentCategory->id ? 'selected' : '' }}>
                                    {{ $parentCategory->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="input_search" name="q" value="{{ request()->input('q') }}"
                            id="s_keyword" required />
                        <button type="submit" id="btn_search" class="input_search_sm">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="search-result">
                    </div>
                </form>
            </div>
            <div class="header_element_right">
                <ul>
                    <li>
                        <a href="{{ route('site.cart.show') }}" id="qty_in_cart"><i
                                class="icon-muahang"></i><span>{{ !empty($headerData->carts) && count($headerData->carts) > 0 && count($headerData->carts) > Cart::instance('wishlist')->count() ? count($headerData->carts) : Cart::instance('wishlist')->count() }}</span></a>
                    </li>
                    <li>
                        <p><i class="icon-huongdanmuahang"></i></p>
                        <span><a href="{{ route('site.buyingTutorial') }}" title="Hướng dẫn mua hàng">Hướng dẫn mua
                                hàng</a></span>
                    </li>

                    @if (Auth::guard('customer')->check())
                        <li style="user-select: auto;">
                            <p style="user-select: auto;"><i class="icon-taikhoan" style="user-select: auto;"></i></p>
                            <span class="account_header" style="user-select: auto;">
                                <a href="{{ route('site.customer.accountInformation') }}"
                                    style="user-select: auto;">{{ Auth::guard('customer')->user()->name }}</a>
                                <ul style="user-select: auto;">
                                    <li style="user-select: auto;"> <a class="icon_account_1 icon-taikhoan"
                                            href="{{ route('site.customer.accountInformation') }}"
                                            style="user-select: auto;"><b style="user-select: auto;">Tài khoản của
                                                bạn</b></a></li>
                                    <li style="user-select: auto;"> <a class="icon_quanly icon-quanlydonhang"
                                            href="{{ route('site.customer.orderHistory') }}"
                                            style="user-select: auto;"><b style="user-select: auto;">Quản lý đơn
                                                hàng</b></a>
                                    </li>
                                    <li style="user-select: auto;">
                                        <form action="{{ route('site.customer.logout') }}" class="logout-form"
                                            method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="log_out"><a href="javascript:void(0)"
                                                    class="icon_out icon-thoat">
                                                    <b>Thoát</b>
                                                </a></button>

                                        </form>
                                    </li>

                                </ul>
                            </span>
                        </li>
                    @else
                        <li>
                            <p><i class="icon-dangky"></i></p>
                            <span><a href="{{ route('site.customer.register') }}" title="Đăng ký">Đăng ký</a></span>
                            <span><a href="{{ route('site.customer.login') }}" title="Đăng nhập">Đăng nhập</a></span>
                        </li>
                    @endif

                    <li>
                        <p><i class="icon-hotline2"></i></p>
                        <span>Hotline:
                            <p><a
                                    href="tel:{{ $headerData->company->hotline }}">{{ $headerData->company->hotline }}</a>
                            </p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
