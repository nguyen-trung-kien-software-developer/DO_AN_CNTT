@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a>
                    <a href="{{ route('site.parentCategory.index', [$parentCategory->slug]) }}"
                        class="fist_menu_cate_a">{{ $parentCategory->name }}</a>
                    <a
                        href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}">{{ $subCategory->name }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                @include('site.layout.leftSideBar')

                <div class="right_list_product">
                    <div class="box_cate_add">
                        <div class="cate_home_mb">
                            <p>{{ $parentCategory->name }}</p>
                        </div>
                        <div class="box_cate_news">
                            <ul>
                                @foreach ($parentCategory->subCategories as $subCategory1)
                                    <li><a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory1->slug]) }}"
                                            title="{{ $subCategory1->name }}">{{ $subCategory1->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="cate_arrangement_pr_list cate_arrangement_pr_list_parent clearfix">
                        <div class="cate_arrangement_pr_list_text">
                            <p>{{ $parentCategory->name }}</p>
                            <b></b>
                        </div>
                        @include('site.layout.arrangeFilter')
                    </div>
                    <div class="clear"></div>
                    <div id="box-product-info">
                        <div id="product_filter_select" style="display: none"> </div>
                        <div class="clear"></div>
                        <div id="load_product_list" class="clearfix">
                            <div class="list_pr_ds">
                                <div class="cate_arrangement_pr_list clearfix">
                                    <div class="cate_arrangement_pr_list_text">
                                        <p><a href="{{ route('site.subCategory.index', [$parentCategory->slug, $subCategory->slug]) }}"
                                                title="{{ $subCategory->name }}">{{ $subCategory->name }}</a></p>
                                        <b></b>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <div id="load_product_list_8" class="load_product_list clearfix">

                                    @foreach ($productsOnePage as $product)
                                        @include('site.layout.product')
                                    @endforeach

                                    <div class="ajax_loadding"></div>
                                    <div class="clear"></div>
                                    <div id="page_cate_8">
                                        <div class="paging paginate-ajax-cate-child" data-id="8">
                                            <ul class="pagination" role="navigation">
                                                @if ($page > 1)
                                                    <li class="page-item"> <a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}"
                                                            rel="next" aria-label="&laquo; Previous">&lsaquo;</a> </li>
                                                @endif

                                                @for ($i = 1; $i <= $page_number; $i++)
                                                    <li class="page-item {{ (empty($page) && $i == 1) || $page == $i ? 'active' : '' }}"
                                                        aria-current="page"><a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">
                                                            {{ $i }}</a></li>
                                                @endfor

                                                @if ($page < $page_number && $page_number > 1)
                                                    <li class="page-item"> <a class="page-link"
                                                            href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}"
                                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a> </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
