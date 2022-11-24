@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list">
                    <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a>
                    <a href="{{ route('site.salePolicy') }}">{{ $page->title }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 clearfix">
            <div class="list_news_home_cate clearfix">
                <div id="tut_detail" class="content_news">
                    <div id="block-artice-content" class="entry-content" style="user-select: auto;">
                        {!! $page->content !!}
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    @endsection
