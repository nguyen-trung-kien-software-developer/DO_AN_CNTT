@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.blog.index') }}">Thông tin hữu ích</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 clearfix">
            <div class="list_news_home_cate clearfix">
                <div class="list_news_home_cate_left">
                    <div class="cate_news_1">
                        <div class="title_name_cate_3 color_5">
                            <p><a href="thong-tin-huu-ich/hong-sam-han-quoc.html">Thông tin hữu ích</a></p>
                            <i class="line_1"></i>
                        </div>

                        @foreach ($blogs as $blog)
                            <div class="child_news1">
                                <a href="{{ route('site.blog.show', [$blog->slug]) }}" title="{{ $blog->title }}"><img
                                        data-src="{{ asset("storage/uploads/$blog->featured_image") }}"
                                        data-alt="{{ $blog->title }}" class="lazy"></a>
                                <span class="summary_news">
                                    <a href="{{ route('site.blog.show', [$blog->slug]) }}" title="{{ $blog->title }}"
                                        class="summary_news_title">{{ App\Helpers\StrHelper::substrwords($blog->title, 80) }}</a>
                                    <p title="{{ $blog->description }}">
                                        {{ App\Helpers\StrHelper::substrwords($blog->description, 200) }}
                                    </p>
                                    <a href="{{ route('site.blog.show', [$blog->slug]) }}" class="fa fa-long-arrow-right"
                                        aria-hidden="true"></a>
                                </span>
                            </div>
                        @endforeach
                    </div>
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
                <div class="list_news_home_cate_right">
                    <div class="title_loc_search">Tin mới</div>
                    @include('site.layout.lastestBlogs')
                </div>
            </div>
        </div>
    </div>
@endsection
