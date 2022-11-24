@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list">
                    <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a>
                    <a href="{{ route('site.samNuiHanQuoc') }}">{{ $page->title }}</a>
                </div>
            </div>
        </div>
    </div>
    <style id="custom-css" type="text/css" style="user-select: auto;">
        :root {
            --primary-color: #76925d;
        }

        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1330px
        }

        .row.row-collapse {
            max-width: 1300px
        }

        .row.row-small {
            max-width: 1322.5px
        }

        .row.row-large {
            max-width: 1360px
        }

        .header-main {
            height: 90px
        }

        #logo img {
            max-height: 90px
        }

        #logo {
            width: 91px;
        }

        #logo a {
            max-width: 250px;
        }

        .header-top {
            min-height: 30px
        }

        .transparent .header-main {
            height: 90px
        }

        .transparent #logo img {
            max-height: 90px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 120px;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px !important
        }

        .stuck #logo img {
            max-height: 70px !important
        }

        .search-form {
            width: 100%;
        }

        .header-bg-color,
        .header-wrapper {
            background-color: #76925d
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .top-bar-nav>li>a {
            line-height: 16px
        }

        .header-main .nav>li>a {
            line-height: 16px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .header-top {
            background-color: #000000 !important;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #76925d;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #76925d !important;
        }

        /* Background Color */
        [data-text-bg="primary"] {
            background-color: #76925d;
        }

        /* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #76925d;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #76925d
        }

        .nav-tabs>li.active>a {
            border-top-color: #76925d
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #76925d
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #76925d
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #76925d;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button,
        .current .breadcrumb-step {
            background-color: #212529;
        }

        [data-text-bg="secondary"] {
            background-color: #212529;
        }

        /* Color */
        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #212529
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #212529 !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #212529
        }

        .success.is-underline:hover,
        .success.is-outline:hover,
        .success {
            background-color: #76925d
        }

        .success-color,
        .success.is-link,
        .success.is-outline {
            color: #76925d;
        }

        .success-border {
            border-color: #76925d !important;
        }

        /* Color !important */
        [data-text-color="success"] {
            color: #76925d !important;
        }

        /* Background Color */
        [data-text-bg="success"] {
            background-color: #76925d;
        }

        .alert.is-underline:hover,
        .alert.is-outline:hover,
        .alert {
            background-color: rgb(31, 188, 0)
        }

        .alert.is-link,
        .alert.is-outline,
        .color-alert {
            color: rgb(31, 188, 0);
        }

        /* Color !important */
        [data-text-color="alert"] {
            color: rgb(31, 188, 0) !important;
        }

        /* Background Color */
        [data-text-bg="alert"] {
            background-color: rgb(31, 188, 0);
        }

        body {
            font-size: 100%;
        }

        @media screen and (max-width: 549px) {
            body {
                font-size: 100%;
            }
        }

        body {
            font-family: "Roboto", sans-serif
        }

        body {
            font-weight: 0
        }

        body {
            color: #212529
        }

        .nav>li>a {
            font-family: "Roboto", sans-serif;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-family: "Roboto", sans-serif;
        }

        .nav>li>a {
            font-weight: 700;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Roboto", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font {
            color: rgb(31, 188, 0);
            text-align: center;
        }

        .alt-font {
            font-family: "Roboto", sans-serif;
        }

        .alt-font {
            font-weight: 0 !important;
        }

        a {
            color: #9c0001;
        }

        a:hover {
            color: #e65322;
        }

        .tagcloud a:hover {
            border-color: #e65322;
            background-color: #e65322;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 300px !important;
                width: 300px !important;
            }
        }

        .footer-1 {
            background-color: #76925d
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }

    </style>
    <style type="text/css" id="wp-custom-css" style="user-select: auto;">
        a {
            color: #76925d;
        }

        .banner-full p {
            margin: 0;
            font-weight: bold;
        }

        .box-product-home .equalize-box {
            justify-content: center;
        }

        .box-product-home .box-image {
            box-shadow: 2px 2px 20px #00000026;
            border-radius: 10px;
            position: relative;
        }

        .price span.amount {
            color: #ff8300 !important;
            font-weight: 300;
        }

        .box-product-home .box-image:before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, .3) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, .3) 100%);
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }

        .box-product-home .box-image:hover::before {
            -webkit-animation: shine .75s;
            animation: shine .75s;
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%
            }
        }

        @keyframes shine {
            100% {
                left: 125%
            }
        }

        .blog-post-camnang .col {
            padding: 6px 15px;
        }

        .blog-post-camnang {
            height: 180px;
            background: #5d00007d;
            overflow: scroll;
            overflow-x: hidden;
            margin: 0;
            border-radius: 10px;
        }

        .blog-post-camnang .box-text {
            padding: 0;
        }

        .blog-post-camnang .box-text .is-divider {
            display: none;
        }

        .blog-post-camnang .box-blog-post {
            position: relative;
            padding-left: 25px;
        }

        .blog-post-camnang .box-blog-post:before {
            font-family: "Font Awesome 5 Free";
            content: "\f06e";
            display: inline-block;
            vertical-align: middle;
            font-weight: 900;
            color: #fff;
            position: absolute;
            left: 0;
        }

        .blog-post-camnang::-webkit-scrollbar {
            width: 0px;
        }

        .btn-camnang {
            background: #e65322 !important;
            padding: 0px 10px;
            border-radius: 20px;
            color: #fff !important;
        }

        .tab-media ul.nav li.tab {
            margin: 0 15px;
        }

        .tab-media ul.nav li.tab.active a {
            color: #76925d !important;
        }

        .tab-media ul.nav li.tab a {
            color: rgba(102, 102, 102, .85);
        }

        .tab-media ul.nav li.tab.active a:before,
        .tab-media ul.nav li.tab:hover a:before {
            background: #76925d !important;
        }

        /*gioi thieu*/
        .box-center-timeline {
            position: relative;
        }

        .box-timeline .col:nth-child(1) .col-inner {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            text-align: right;
        }

        .box-timeline .col:nth-child(3) .col-inner {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: left;
        }

        .line-timeline {
            position: absolute;
            background-color: #76925d;
            width: 5px;
            height: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .dot-timeline {
            background: #76925d;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .box-timeline {
            min-height: 200px;
        }

        .box-timeline .text p {
            margin: 0;
            font-size: 85px;
            color: rgba(37, 37, 37, 0.05);
            font-weight: bold;

        }

        .box-timeline ul {
            list-style: none;
            margin: 0;
            border: 1px solid #000;
            border-radius: 15px;
            width: 100%;
        }

        .box-timeline ul li {
            margin: 15px 30px;
            font-size: 18px;
        }

        .box-timeline .col-inner {
            min-height: 150px;
        }

        .box-timeline .col-inner li {
            position: relative;
        }

        .box-timeline .col:nth-child(1) .col-inner li:after {
            font-family: "Font Awesome 5 Free";
            content: "\f101";
            display: inline-block;
            vertical-align: middle;
            font-weight: 900;
            position: absolute;
            top: 0;
            right: -20px;
            transform: rotate(180deg);
            color: #76925d;
        }

        .box-timeline .col:nth-child(3) .col-inner li:before {
            font-family: "Font Awesome 5 Free";
            content: "\f101";
            display: inline-block;
            vertical-align: middle;
            font-weight: 900;
            position: absolute;
            top: 0;
            left: -20px;
            color: #76925d;
        }

        .box-timeline .col:nth-child(3) .col-inner .text {
            margin-left: -15%;
        }

        .box-timeline .col:nth-child(1) .col-inner .text {
            margin-right: -15%;
        }

        .video-fix .wp-video {
            width: 100% !important;
        }

        .single-brand .box-text ul {
            margin: 0;
            list-style: none;
        }

        .single-brand .box-text ul li {
            margin: 0;
            padding-left: 1.2em;
            line-height: 55px;
            font-size: 19px;
            position: relative;
        }

        .single-brand .box-text ul li:before {
            font-family: "Font Awesome 5 Free";
            content: "\f560";
            display: inline-block;
            vertical-align: middle;
            font-weight: 900;
            position: absolute;
            top: 0;
            left: 0;
            color: #76925d;
        }

        #main {
            min-height: 100vh;
        }

        body {
            overflow-x: hidden;
        }

        .chungnhan p {
            margin: 0;
        }

        .box-step-kiemdinh h1 {
            margin: 16px 0;
            font-size: 40px;
        }

        .box-step-kiemdinh h2 {
            font-size: 19px;
            margin-bottom: 31px;
        }

        .box-step-kiemdinh p {
            font-size: 19px;
            padding: 0 11px;
        }

        .form-contact {
            background: #fff;
            border-radius: 30px;
            padding: 40px;
        }

        .cf7-contact .wpcf7-form-control-wrap input,
        .cf7-contact .wpcf7-form-control-wrap textarea {
            border: 1px solid #76925d;
            box-shadow: none;
            border-radius: 20px;
        }

        .cf7-contact h2 {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #76925d;
        }

        .cf7-contact .wpcf7-submit {
            border-radius: 20px;
            padding: 0px 30px;
        }

        form.checkout .form-row-first,
        form.checkout .form-row-last {
            width: 100% !important;
        }

        form.checkout h3 {
            display: none;
        }

        .checkout-page-title {
            display: none;
        }

        @media (max-width: 690px) {
            #section_328270475 {
                display: none;
            }
        }

        .content_news p {
            font-size: 18px;
            font-weight: 400;
            text-align: left;
            color: #bf1e2e;
        }

    </style>
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
