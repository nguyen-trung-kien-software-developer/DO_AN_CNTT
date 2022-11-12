<?php

namespace Database\Seeders;

use App\Models\Introduction;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //         Introduction::insert([
        //             'title' => 'Giới Thiệu về Lasham',
        //             'represented_image' => 'lasham_founder.png',
        //             'description' => '<p style="user-select: auto;">&nbsp; &nbsp; Xin chào các bạn. Tôi là Kim Changyil, người sáng lập thương hiệu sâm núi hữu cơ Lasham – một báu vật linh thiêng của núi rừng Sobaek, Hàn Quốc. Tôi có một khát vọng:<em style="user-select: auto;"><strong style="user-select: auto;"> được sống lâu, sống mạnh khỏe và sống có ích</strong></em>. Điều đó đã thôi thúc tôi trở về quê hương tiếp nối nghiệp trồng sâm núi truyền thống của gia đình, quê hương Punggi thuộc Gyeongbuk. Nhằm mục đích khôi phục và phát triển giống sâm nguyên bản quí hiếm của bán đảo Triều Tiên tôi đã mất hơn 10 năm, và cho đến hiện tại chúng tôi đã nhân giống được trên khoảng gần 10 hecta ở những cánh rừng nguyên sinh thuộc vùng núi Sobaek. Và để đưa các sản phẩm đến gần hơn với người tiêu dùng, thương hiệu Lasham đã có mặt trên thị trường nội địa Hàn Quốc từ năm 2015 với đa dạng sản phẩm như <em style="user-select: auto;">Sâm tươi nguyên cây, Sâm khô nguyên cây, Tinh chất sâm núi hữu cơ, Bột sâm núi hữu cơ nguyên chất…</em> Hãy cùng tôi thưởng thức báu vật sâm núi Lasham để có cuộc sống khỏe mạnh hơn, nhiều năng lượng hơn và sống lâu hơn!</p>',
        //             'content' => '<style id="custom-css" type="text/css">:root {
        //             --primary-color: #76925d;
        //           }

        //           .full-width .ubermenu-nav,
        //           .container,
        //           .row {
        //             max-width: 1330px
        //           }

        //           .row.row-collapse {
        //             max-width: 1300px
        //           }

        //           .row.row-small {
        //             max-width: 1322.5px
        //           }

        //           .row.row-large {
        //             max-width: 1360px
        //           }

        //           .header-main {
        //             height: 90px
        //           }

        //           /* #logo img {
        //             max-height: 90px
        //           }

        //           #logo {
        //             width: 91px;
        //           }

        //           #logo a {
        //             max-width: 250px;
        //           }

        //           .header-top {
        //             min-height: 30px
        //           }
        //            */
        //           /* .transparent .header-main {
        //             height: 90px
        //           }

        //           .transparent #logo img {
        //             max-height: 90px
        //           } */

        //           .has-transparent+.page-title:first-of-type,
        //           .has-transparent+#main>.page-title,
        //           .has-transparent+#main>div>.page-title,
        //           .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
        //             padding-top: 120px;
        //           }

        //           .header.show-on-scroll,
        //           .stuck .header-main {
        //             height: 70px !important
        //           }

        //           .stuck #logo img {
        //             max-height: 70px !important
        //           }

        //           .search-form {
        //             width: 100%;
        //           }

        //           .header-bg-color,
        //           .header-wrapper {
        //             background-color: #76925d
        //           }

        //           /* .header-bottom {
        //             background-color: #f1f1f1
        //           }

        //           .top-bar-nav>li>a {
        //             line-height: 16px
        //           } */

        //           /* .header-main .nav>li>a {
        //             line-height: 16px
        //           }

        //           @media (max-width: 549px) {
        //             .header-main {
        //               height: 70px
        //             }

        //             #logo img {
        //               max-height: 70px
        //             }
        //           }

        //           .header-top {
        //             background-color: #000000 !important;
        //           } */

        //           /* Color */
        //           .accordion-title.active,
        //           .has-icon-bg .icon .icon-inner,
        //           .logo a,
        //           .primary.is-underline,
        //           .primary.is-link,
        //           .badge-outline .badge-inner,
        //           .nav-outline>li.active>a,
        //           .nav-outline>li.active>a,
        //           .cart-icon strong,
        //           [data-color="primary"],
        //           .is-outline.primary {
        //             color: #76925d;
        //           }

        //           /* Color !important */
        //           [data-text-color="primary"] {
        //             color: #76925d !important;
        //           }

        //           /* Background Color */
        //           [data-text-bg="primary"] {
        //             background-color: #76925d;
        //           }

        //           /* Background */
        //           .scroll-to-bullets a,
        //           .featured-title,
        //           .label-new.menu-item>a:after,
        //           .nav-pagination>li>.current,
        //           .nav-pagination>li>span:hover,
        //           .nav-pagination>li>a:hover,
        //           .has-hover:hover .badge-outline .badge-inner,
        //           button[type="submit"],
        //           .button.wc-forward:not(.checkout):not(.checkout-button),
        //           .button.submit-button,
        //           .button.primary:not(.is-outline),
        //           .featured-table .title,
        //           .is-outline:hover,
        //           .has-icon:hover .icon-label,
        //           .nav-dropdown-bold .nav-column li>a:hover,
        //           .nav-dropdown.nav-dropdown-bold>li>a:hover,
        //           .nav-dropdown-bold.dark .nav-column li>a:hover,
        //           .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        //           .is-outline:hover,
        //           .tagcloud a:hover,
        //           .grid-tools a,
        //           input[type="submit"]:not(.is-form),
        //           .box-badge:hover .box-text,
        //           input.button.alt,
        //           .nav-box>li>a:hover,
        //           .nav-box>li.active>a,
        //           .nav-pills>li.active>a,
        //           .current-dropdown .cart-icon strong,
        //           .cart-icon:hover strong,
        //           .nav-line-bottom>li>a:before,
        //           .nav-line-grow>li>a:before,
        //           .nav-line>li>a:before,
        //           .banner,
        //           .header-top,
        //           .slider-nav-circle .flickity-prev-next-button:hover svg,
        //           .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        //           .primary.is-outline:hover,
        //           .button.primary:not(.is-outline),
        //           input[type="submit"].primary,
        //           input[type="submit"].primary,
        //           input[type="reset"].button,
        //           input[type="button"].primary,
        //           .badge-inner {
        //             background-color: #76925d;
        //           }

        //           /* Border */
        //           .nav-vertical.nav-tabs>li.active>a,
        //           .scroll-to-bullets a.active,
        //           .nav-pagination>li>.current,
        //           .nav-pagination>li>span:hover,
        //           .nav-pagination>li>a:hover,
        //           .has-hover:hover .badge-outline .badge-inner,
        //           .accordion-title.active,
        //           .featured-table,
        //           .is-outline:hover,
        //           .tagcloud a:hover,
        //           blockquote,
        //           .has-border,
        //           .cart-icon strong:after,
        //           .cart-icon strong,
        //           .blockUI:before,
        //           .processing:before,
        //           .loading-spin,
        //           .slider-nav-circle .flickity-prev-next-button:hover svg,
        //           .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        //           .primary.is-outline:hover {
        //             border-color: #76925d
        //           }

        //           .nav-tabs>li.active>a {
        //             border-top-color: #76925d
        //           }

        //           .widget_shopping_cart_content .blockUI.blockOverlay:before {
        //             border-left-color: #76925d
        //           }

        //           .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
        //             border-left-color: #76925d
        //           }

        //           /* Fill */
        //           .slider .flickity-prev-next-button:hover svg,
        //           .slider .flickity-prev-next-button:hover .arrow {
        //             fill: #76925d;
        //           }

        //           /* Background Color */
        //           [data-icon-label]:after,
        //           .secondary.is-underline:hover,
        //           .secondary.is-outline:hover,
        //           .icon-label,
        //           .button.secondary:not(.is-outline),
        //           .button.alt:not(.is-outline),
        //           .badge-inner.on-sale,
        //           .button.checkout,
        //           .single_add_to_cart_button,
        //           .current .breadcrumb-step {
        //             background-color: #212529;
        //           }

        //           [data-text-bg="secondary"] {
        //             background-color: #212529;
        //           }

        //           /* Color */
        //           .secondary.is-underline,
        //           .secondary.is-link,
        //           .secondary.is-outline,
        //           .stars a.active,
        //           .star-rating:before,
        //           .woocommerce-page .star-rating:before,
        //           .star-rating span:before,
        //           .color-secondary {
        //             color: #212529
        //           }

        //           /* Color !important */
        //           [data-text-color="secondary"] {
        //             color: #212529 !important;
        //           }

        //           /* Border */
        //           .secondary.is-outline:hover {
        //             border-color: #212529
        //           }

        //           .success.is-underline:hover,
        //           .success.is-outline:hover,
        //           .success {
        //             background-color: #76925d
        //           }

        //           .success-color,
        //           .success.is-link,
        //           .success.is-outline {
        //             color: #76925d;
        //           }

        //           .success-border {
        //             border-color: #76925d !important;
        //           }

        //           /* Color !important */
        //           [data-text-color="success"] {
        //             color: #76925d !important;
        //           }

        //           /* Background Color */
        //           [data-text-bg="success"] {
        //             background-color: #76925d;
        //           }

        //           .alert.is-underline:hover,
        //           .alert.is-outline:hover,
        //           .alert {
        //             background-color: rgb(31, 188, 0)
        //           }

        //           .alert.is-link,
        //           .alert.is-outline,
        //           .color-alert {
        //             color: rgb(31, 188, 0);
        //           }

        //           /* Color !important */
        //           [data-text-color="alert"] {
        //             color: rgb(31, 188, 0) !important;
        //           }

        //           /* Background Color */
        //           [data-text-bg="alert"] {
        //             background-color: rgb(31, 188, 0);
        //           }

        //           body {
        //             font-size: 100%;
        //           }

        //           @media screen and (max-width: 549px) {
        //             body {
        //               font-size: 100%;
        //             }
        //           }

        //           body {
        //             font-family: "Roboto", sans-serif
        //           }

        //           body {
        //             font-weight: 0
        //           }

        //           body {
        //             color: #212529
        //           }

        //           .nav>li>a {
        //             font-family: "Roboto", sans-serif;
        //           }

        //           .mobile-sidebar-levels-2 .nav>li>ul>li>a {
        //             font-family: "Roboto", sans-serif;
        //           }

        //           .nav>li>a {
        //             font-weight: 700;
        //           }

        //           .mobile-sidebar-levels-2 .nav>li>ul>li>a {
        //             font-weight: 700;
        //           }

        //           h1,
        //           h2,
        //           h3,
        //           h4,
        //           h5,
        //           h6,
        //           .heading-font,
        //           .off-canvas-center .nav-sidebar.nav-vertical>li>a {
        //             font-family: "Roboto", sans-serif;
        //           }

        //           h1,
        //           h2,
        //           h3,
        //           h4,
        //           h5,
        //           h6,
        //           .heading-font,
        //           .banner h1,
        //           .banner h2 {
        //             font-weight: 700;
        //           }

        //           h1,
        //           h2,
        //           h3,
        //           h4,
        //           h5,
        //           h6,
        //           .heading-font {
        //             color: rgb(31, 188, 0);
        //             text-align: center;
        //           }

        //           .alt-font {
        //             font-family: "Roboto", sans-serif;
        //           }

        //           .alt-font {
        //             font-weight: 0 !important;
        //           }

        //           a {
        //             color: #9c0001;
        //           }

        //           a:hover {
        //             color: #e65322;
        //           }

        //           .tagcloud a:hover {
        //             border-color: #e65322;
        //             background-color: #e65322;
        //           }

        //           @media screen and (min-width: 550px) {
        //             .products .box-vertical .box-image {
        //               min-width: 300px !important;
        //               width: 300px !important;
        //             }
        //           }

        //           .footer-1 {
        //             background-color: #76925d
        //           }

        //           .label-new.menu-item>a:after {
        //             content: "New";
        //           }

        //           .label-hot.menu-item>a:after {
        //             content: "Hot";
        //           }

        //           .label-sale.menu-item>a:after {
        //             content: "Sale";
        //           }

        //           .label-popular.menu-item>a:after {
        //             content: "Popular";
        //           }

        //           </style>
        //           <style type="text/css" id="wp-custom-css">a {
        //             color: #76925d;
        //           }
        //     .banner-full p{
        //         margin: 0;
        //         font-weight: bold;
        //     }

        //     .box-product-home .equalize-box{
        //         justify-content: center;
        //     }
        //     .box-product-home .box-image{
        //         box-shadow: 2px 2px 20px #00000026;
        //         border-radius: 10px;
        //         position: relative;
        //     }
        //     .price span.amount{
        //         color: #ff8300 !important;
        //         font-weight: 300;
        //     }
        //     .box-product-home .box-image:before{
        //         position: absolute;
        //         top: 0;
        //         left: -75%;
        //         z-index: 2;
        //         display: block;
        //         content: "";
        //         width: 50%;
        //         height: 100%;
        //         background: -webkit-linear-gradient(left,rgba(255,255,255,0) 0,rgba(255,255,255,.3) 100%);
        //         background: linear-gradient(to right,rgba(255,255,255,0) 0,rgba(255,255,255,.3) 100%);
        //         -webkit-transform: skewX(-25deg);
        //         transform: skewX(-25deg);
        //     }
        //     .box-product-home .box-image:hover::before {
        //         -webkit-animation: shine .75s;
        //         animation: shine .75s;
        //     }
        //     @-webkit-keyframes shine{100%{left:125%}}
        //     @keyframes shine{100%{left:125%}}
        //     .blog-post-camnang .col{
        //         padding: 6px 15px;
        //     }
        //     .blog-post-camnang{
        //           height: 180px;
        //         background: #5d00007d;
        //         overflow: scroll;
        //         overflow-x: hidden;
        //         margin: 0;
        //         border-radius: 10px;
        //     }
        //     .blog-post-camnang .box-text{
        //         padding:0;
        //     }
        //     .blog-post-camnang .box-text .is-divider{
        //         display: none;
        //     }
        //     .blog-post-camnang .box-blog-post{
        //         position: relative;
        //         padding-left: 25px;
        //     }
        //     .blog-post-camnang .box-blog-post:before{
        //             font-family: "Font Awesome 5 Free";
        //         content: "\f06e";
        //         display: inline-block;
        //         vertical-align: middle;
        //         font-weight: 900;
        //         color: #fff;
        //         position: absolute;
        //         left:0;
        //     }
        //     .blog-post-camnang::-webkit-scrollbar {
        //       width: 0px;
        //     }
        //     .btn-camnang{
        //         background: #e65322 !important;
        //         padding: 0px 10px;
        //         border-radius: 20px;
        //         color: #fff !important;
        //     }
        //     .tab-media ul.nav li.tab{
        //         margin: 0 15px;
        //     }
        //     .tab-media ul.nav li.tab.active a{
        //         color: #76925d !important;
        //     }
        //     .tab-media ul.nav li.tab a{
        //         color: rgba(102,102,102,.85);
        //     }
        //     .tab-media ul.nav li.tab.active a:before, .tab-media ul.nav li.tab:hover a:before{
        //         background: #76925d !important;
        //     }

        //     /*gioi thieu*/
        //     .box-center-timeline{
        //         position: relative;
        //     }
        //     .box-timeline .col:nth-child(1) .col-inner{
        //         display: flex;
        //         justify-content: flex-end;
        //         align-items: center;
        //         text-align: right;
        //     }
        //     .box-timeline .col:nth-child(3) .col-inner{
        //         display: flex;
        //         justify-content: flex-start;
        //         align-items: center;
        //         text-align: left;
        //     }
        //     .line-timeline{
        //       position: absolute;
        //         background-color: #76925d;
        //         width: 5px;
        //         height: 100%;
        //       top: 50%;
        //       left: 50%;
        //       transform: translate(-50%,-50%);
        //     }
        //     .dot-timeline{
        //         background: #76925d;
        //         width: 20px;
        //         height: 20px;
        //         border-radius: 50%;
        //         position: absolute;
        //         top: 50%;
        //         left: 50%;
        //         transform: translate(-50%,-50%);
        //     }
        //     .box-timeline{
        //         min-height: 200px;
        //     }
        //     .box-timeline .text p{
        //         margin: 0;
        //         font-size: 85px;
        //         color: rgba(37, 37, 37, 0.05);
        //         font-weight: bold;

        //     }
        //     .box-timeline ul{
        //         list-style: none;
        //         margin: 0;
        //         border: 1px solid #000;
        //         border-radius: 15px;
        //         width: 100%;
        //     }
        //     .box-timeline ul li{
        //     margin: 15px 30px;
        //             font-size: 18px;
        //     }
        //     .box-timeline .col-inner{
        //         min-height: 150px;
        //     }
        //     .box-timeline .col-inner li{
        //         position: relative;
        //     }
        //     .box-timeline .col:nth-child(1) .col-inner li:after{
        //             font-family: "Font Awesome 5 Free";
        //         content: "\f101";
        //         display: inline-block;
        //         vertical-align: middle;
        //         font-weight: 900;
        //         position: absolute;
        //         top: 0;
        //         right:-20px;
        //         transform: rotate(180deg);
        //         color: #76925d;
        //     }
        //     .box-timeline .col:nth-child(3) .col-inner li:before{
        //             font-family: "Font Awesome 5 Free";
        //         content: "\f101";
        //         display: inline-block;
        //         vertical-align: middle;
        //         font-weight: 900;
        //         position: absolute;
        //         top: 0;
        //         left:-20px;
        //         color: #76925d;
        //     }
        //     .box-timeline	.col:nth-child(3) .col-inner .text{
        //         margin-left: -15%;
        //     }
        //     .box-timeline	.col:nth-child(1) .col-inner .text{
        //         margin-right:-15%;
        //     }
        //     .video-fix .wp-video {
        //         width: 100% !important;
        //     }

        //     .single-brand .box-text ul {
        //         margin: 0;
        //         list-style: none;
        //     }
        //     .single-brand .box-text ul li{
        //         margin: 0;
        //         padding-left: 1.2em;
        //         line-height: 55px;
        //         font-size: 19px;
        //         position: relative;
        //     }
        //     .single-brand .box-text ul li:before{
        //             font-family: "Font Awesome 5 Free";
        //         content: "\f560";
        //         display: inline-block;
        //         vertical-align: middle;
        //         font-weight: 900;
        //         position: absolute;
        //         top: 0;
        //         left:0;
        //         color: #76925d;
        //     }

        //     #main{
        //         min-height: 100vh;
        //     }
        //     body{
        //         overflow-x: hidden;
        //     }
        //     .chungnhan p{
        //         margin: 0;
        //     }

        //     .box-step-kiemdinh h1{
        //             margin: 16px 0;
        //         font-size: 40px;
        //     }

        //     .box-step-kiemdinh h2{
        //         font-size: 19px;
        //         margin-bottom: 31px;
        //     }

        //     .box-step-kiemdinh p{
        //         font-size: 19px;
        //         padding: 0 11px;
        //     }
        //     .form-contact{
        //             background: #fff;
        //         border-radius: 30px;
        //         padding: 40px;
        //     }
        //     .cf7-contact .wpcf7-form-control-wrap input, .cf7-contact .wpcf7-form-control-wrap textarea{
        //         border: 1px solid #76925d;
        //         box-shadow: none;
        //         border-radius: 20px;
        //     }
        //     .cf7-contact h2{
        //             font-size: 26px;
        //         font-weight: bold;
        //         letter-spacing: 2px;
        //         color: #76925d;
        //     }
        //     .cf7-contact .wpcf7-submit{
        //             border-radius: 20px;
        //         padding: 0px 30px;
        //     }
        //     form.checkout .form-row-first,form.checkout .form-row-last{
        //         width: 100% !important;
        //     }
        //     form.checkout h3{
        //         display: none;
        //     }
        //     .checkout-page-title{
        //         display: none;
        //     }
        //     @media (max-width: 690px) {
        //       #section_328270475 {
        //         display: none;
        //       }
        //     }
        //     .content_news p {
        //       font-size: 18px;
        //       font-weight:400;
        //       /* text-align: left; */
        //       color: #bf1e2e;
        //     }
        //     </style><section class="section single-brand" id="section_312345353" style="user-select: auto;">
        //         <div class="bg section-bg fill bg-fill bg-loaded" style="user-select: auto;">
        //         </div>
        //         <div class="section-content relative" style="user-select: auto;">
        //       <div id="text-3420706857" class="text title-heading" style="user-select: auto;">
        //       <h1 style="user-select: auto;">THƯƠNG HIỆU LASHAM</h1>
        //           </div>
        //       <div class="row row-collapse" id="row-681685641" style="user-select: auto;">
        //       <div id="col-500311328" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-1082198147" class="text title-child" style="user-select: auto;">
        //       <p style="user-select: auto;">TRIẾT LÝ KINH DOANH</p>
        //           </div>
        //         </div>
        //           </div>
        //       <div id="col-1863990139" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-146264184" class="text box-text" style="user-select: auto;">
        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Chân thành, kiên trì, bền bỉ tạo lòng tin bằng chất lượng sản phẩm tốt.</li>
        //       <li style="user-select: auto;">Sức khoẻ con người và cuộc đời cây Sâm núi khá gần gũi, tương đồng.</li>
        //       <li style="user-select: auto;">Sức khoẻ con người là một quá trình kiên trì tích luỹ. Giá trị của Sâm núi cũng tích tụ bởi thời gian “đời ông trồng – đời cha chăm sóc – đời con thu hoạch”.</li>
        //       </ul>
        //           </div>


        //         </div>
        //           </div>



        //       </div>
        //       <div class="row row-collapse" id="row-1898967688" style="user-select: auto;">


        //       <div id="col-1501997033" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-571023886" class="text title-child" style="user-select: auto;">


        //       <p style="user-select: auto;">SỨ MỆNH</p>
        //           </div>


        //         </div>
        //           </div>



        //       <div id="col-393081573" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-80021505" class="text box-text" style="user-select: auto;">


        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Bảo tồn nguồn gen sâm Cao ly nguyên bản của bán đảo Triều tiên.</li>
        //       <li style="user-select: auto;">Gìn giữ và phát huy di sản 120 năm lịch sử của Hợp tác xã Sâm Punggi, vùng núi Sobaek và truyền lại cho thế hệ sau.</li>
        //       <li style="user-select: auto;">Nâng cao sức khỏe, cải thiện chất lượng cuộc sống con người.</li>
        //       </ul>
        //           </div>


        //         </div>
        //           </div>



        //       </div>
        //       <div class="row row-collapse" id="row-1806819681" style="user-select: auto;">


        //       <div id="col-2117076534" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-3611093100" class="text title-child" style="user-select: auto;">


        //       <p style="user-select: auto;">TẦM NHÌN</p>
        //           </div>


        //         </div>
        //           </div>



        //       <div id="col-10227958" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-2553699107" class="text box-text" style="user-select: auto;">


        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Trở thành doanh nghiệp hàng đầu cung cấp sản phẩm chế biến từ Sâm sạch chất lượng cao.</li>
        //       </ul>
        //           </div>
        //         </div>
        //           </div>
        //       </div>
        //       <div class="row row-collapse" id="row-1911029231" style="user-select: auto;">

        //       <div id="col-708018748" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-3658343841" class="text title-child" style="user-select: auto;">
        //       <p style="user-select: auto;">THÀNH TỰU</p>
        //           </div>
        //         </div>
        //           </div>
        //       <div id="col-517648876" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-345924757" class="text box-text" style="user-select: auto;">
        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Đạt tiêu chuẩn Sâm nguyên liệu của Punggi, Hợp tác xã Nhân Sâm truyền thống 120 năm lịch sử và được Nhà nước bảo hộ tương đương Hồng Sâm chính phủ.</li>
        //       <li style="user-select: auto;">Giải thưởng Sản phẩm Ưu tú của Viện Chấn hưng Lâm nghiệp Hàn Quốc.</li>
        //       <li style="user-select: auto;">Bằng khen của thị trưởng thành phố Yeongju về những đóng góp cho sự phát triển ngành nông lâm địa phương đồng thời đóng góp cho việc quảng bá thương hiệu vùng miền.</li>
        //       </ul>
        //           </div>
        //         <div class="row large-columns-2 medium-columns- small-columns- row-xsmall" style="user-select: auto;">
        //               <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="images/introductions/Picture7-1.png" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-none" style="user-select: auto;">
        //                   <div class="box-image" style="width: 59%; user-select: auto;">
        //                     <img width="285" height="393" src="images/introductions/Picture7-1.png" class="attachment-original size-original" alt="" loading="lazy" ids="614,613" style="user-select: auto;" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_width="59" image_size="original" text_align="center">                                                              </div>
        //                   <div class="box-text text-center" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="images/introductions/Picture6-1.png" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-none" style="user-select: auto;">
        //                   <div class="box-image" style="width: 59%; user-select: auto;">
        //                     <img width="553" height="612" src="images/introductions/Picture6-1.png" class="attachment-original size-original" alt="" loading="lazy" ids="614,613" style="user-select: auto;" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_width="59" image_size="original" text_align="center" srcset="images/introductions/Picture6-1.png 553w, images/introductions/Picture6-1-361x400.png 361w" sizes="(max-width: 553px) 100vw, 553px">                                                              </div>
        //                   <div class="box-text text-center" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //              </div>
        //         </div>
        //           </div>
        //       <div id="col-697184434" class="col trademark-label small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-1398471482" class="text icon-text" style="user-select: auto;">
        //       <p data-animate="fadeInRight" data-animated="true" style="user-select: auto;">Lasham</p>
        //           </div>
        //         </div>
        //           </div>
        //       </div>
        //       <div class="row row-collapse align-middle" id="row-840126881" style="user-select: auto;">
        //       <div id="col-1306935114" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-2916080537" class="text title-child" style="user-select: auto;">
        //       <p style="user-select: auto;">VÙNG NGUYÊN LIỆU</p>
        //           </div>
        //         </div>
        //           </div>
        //       <div id="col-1003671302" class="col medium-7 small-12 large-7" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-871435435" class="text box-text" style="user-select: auto;">
        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Sâm núi Lasham được khai thác trên những ngọn núi thuộc dãy núi Sobaek thuộc địa phận quận Bong-hwa &amp; thành phố Yeongju tỉnh Geongsangbuk. Vùng đất này nằm ở nơi giao thoa giữa hai dãy núi Taebaek và Sobaek thuộc trung tâm của dãy Baektu được gọi Song-baek-ji-gan (Lưỡng bạch chi gian) là nơi trọng yếu về phong thủy địa lý, mảnh đất linh thiêng từ bao đời nay.</li>
        //       </ul>
        //           </div>
        //         </div>
        //       <style style="user-select: auto;">
        //       #col-1003671302 > .col-inner {
        //       padding: 0px 40px 0px 0px;
        //       }
        //       </style>
        //       </div>
        //       <div id="col-793223886" class="col medium-4 small-12 large-4" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1527372468" style="user-select: auto;">
        //         <a class="image-lightbox lightbox-gallery" title="" href="https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e.jpg" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
        //           <img width="860" height="517" src="https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e.jpg" class="attachment-original size-original" alt="" loading="lazy" srcset="https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e.jpg 860w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e-665x400.jpg 665w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e-768x462.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_dXWMqGTH_b6a7b7623bc36d86a648603633182e208780450e-600x361.jpg 600w" sizes="(max-width: 860px) 100vw, 860px" style="user-select: auto;">
        //               </div>
        //                 </a>
        //       <style style="user-select: auto;">
        //       #image_1527372468 {
        //       width: 100%;
        //       }
        //       </style>
        //       </div>
        //         </div>
        //           </div>
        //       <div id="col-825472430" class="col medium-4 small-12 large-4" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1619226380" style="user-select: auto;">
        //         <a class="image-lightbox lightbox-gallery" title="" href="https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648.jpg" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
        //           <img width="860" height="571" src="https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648.jpg" class="attachment-original size-original" alt="" loading="lazy" srcset="https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648.jpg 860w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648-602x400.jpg 602w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648-768x510.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_s4xvCIuh_709c61c8bad0492487cf979df6a6761714685648-600x398.jpg 600w" sizes="(max-width: 860px) 100vw, 860px" style="user-select: auto;">
        //               </div>
        //                 </a>
        //       <style style="user-select: auto;">
        //       #image_1619226380 {
        //       width: 100%;
        //       }
        //       </style>
        //       </div>



        //         </div>
        //           </div>



        //       <div id="col-375642814" class="col medium-7 small-12 large-7" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-1149226295" class="text box-text" style="user-select: auto;">


        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Trên những quả núi thuộc dãy núi Sobaek là những cánh rừng nguyên sinh, điều kiện tự nhiên không bị ô nhiễm, tối ưu nhất với cây sâm núi. Những dãy núi này có độ cao so với mặt nước biển từ 600~1000m.</li>
        //       </ul>
        //           </div>


        //         </div>

        //       <style style="user-select: auto;">
        //       #col-375642814 > .col-inner {
        //       padding: 0px 0px 0px 40px;
        //       }
        //       </style>
        //       </div>



        //       <div id="col-522441673" class="col medium-7 small-12 large-7" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div id="text-1895281095" class="text box-text" style="user-select: auto;">


        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Vùng này nằm ở 36.5 độ Vĩ Bắc-nơi có nhiệt độ tương đương với thân nhiệt người, đồng thời cũng thuộc vùng giao hoà khí hậu nóng của vùng Yeongnam và khí hậu lạnh của vùng Kangwondo. Vì vậy, Sâm núi ở đây hấp thu được hai vùng khí hậu và có dược tính cao.</li>
        //       </ul>
        //           </div>


        //         </div>

        //       <style style="user-select: auto;">
        //       #col-522441673 > .col-inner {
        //       padding: 0px 40px 0px 0px;
        //       }
        //       </style>
        //       </div>



        //       <div id="col-1652968707" class="col medium-4 small-12 large-4" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">



        //       <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1028636764" style="user-select: auto;">
        //         <a class="image-lightbox lightbox-gallery" title="" href="https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25.jpg" style="user-select: auto;">						<div class="img-inner dark" style="user-select: auto;">
        //           <img width="860" height="572" src="https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25.jpg" class="attachment-original size-original" alt="" loading="lazy" srcset="https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25.jpg 860w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25-601x400.jpg 601w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25-768x511.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/1982672200_Q1fdbDAW_e32015da0f95f0285e4fa61fa035b05d8309ba25-600x399.jpg 600w" sizes="(max-width: 860px) 100vw, 860px" style="user-select: auto;">
        //               </div>
        //                 </a>
        //       <style style="user-select: auto;">
        //       #image_1028636764 {
        //       width: 100%;
        //       }
        //       </style>
        //       </div>
        //         </div>
        //           </div>
        //       <div id="col-682468085" class="col medium-11 small-12 large-11" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-1718430031" class="text box-text" style="user-select: auto;">
        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Từ hàng trăm năm thương hiệu Punggi Insam của đất Sâm Cao ly đã được lưu truyền và biết đến, đặc biệt có Hợp tác xã Nhân Sâm Punggi nổi tiếng với hơn 120 năm lịch sử khai thác và phát triển thương mại sâm Hàn Quốc.</li>
        //       </ul>
        //           </div>
        //         </div>
        //           </div>
        //       </div>
        //       <div class="row row-collapse" id="row-1182026373" style="user-select: auto;">


        //       <div id="col-2077992027" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">

        //       <div id="text-1033392111" class="text title-child" style="user-select: auto;">
        //       <p style="user-select: auto;">CÔNG NGHỆ, THU HOẠCH VÀ CHẾ BIẾN</p>
        //           </div>
        //         </div>
        //           </div>
        //       <div id="col-1201409882" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //       <div id="text-3180168349" class="text box-text" style="user-select: auto;">
        //       <ul style="user-select: auto;">
        //       <li style="user-select: auto;">Tỉ lệ sống sót của Sâm 2,3 tuổi là 90%. Đến 7,8 tuổi chỉ còn khoảng 60% nên sâm càng nhiều tuổi sức chống chịu với tự nhiên càng cao nên đem lại dược tính cao cho sâm núi. Do vậy gieo trồng sâm núi không cho sản lượng ngay mà thiên về chất lượng.</li>
        //       <li style="user-select: auto;">Thu hoạch 4 mùa: Xuân – Hạ – Thu – Đông.</li>
        //       <li style="user-select: auto;">Theo phương pháp truyền thống thủ công, người già địa phương có kinh nghiệm trực tiếp lên núi đào dỡ sâm và phân loại.</li>
        //       <li style="user-select: auto;">Sâm khô nguyên cây: được sấy khô theo 2 cách: sấy lạnh nhiệt độ thấp khoảng 6 tháng trong những hầm đá được đào trong vách núi; sấy khô tự nhiên dưới ánh nắng mặt trời.</li>
        //       <li style="user-select: auto;">Sâm tinh chất: được đun chiết xuất ở nhiệt độ thấp trong 72 tiếng với dây chuyền máy móc vệ sinh hiện đại.</li>
        //       </ul>
        //           </div>
        //         <div class="row large-columns-2 medium-columns- small-columns- row-xsmall row-full-width" style="user-select: auto;">
        //               <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717-788x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="1100" height="1117" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717.jpg 1100w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717-394x400.jpg 394w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717-788x800.jpg 788w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717-768x780.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235717-600x609.jpg 600w" sizes="(max-width: 1100px) 100vw, 1100px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-1067x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="2560" height="1920" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450.jpg 2560w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-533x400.jpg 533w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-1067x800.jpg 1067w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-768x576.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-1536x1152.jpg 1536w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-2048x1536.jpg 2048w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635599_1609347419450-600x450.jpg 600w" sizes="(max-width: 2560px) 100vw, 2560px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-1067x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="2560" height="1920" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982.jpg 2560w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-533x400.jpg 533w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-1067x800.jpg 1067w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-768x576.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-1536x1152.jpg 1536w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-2048x1536.jpg 2048w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635572_1609347418982-600x450.jpg 600w" sizes="(max-width: 2560px) 100vw, 2560px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-1067x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="2560" height="1920" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379.jpg 2560w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-533x400.jpg 533w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-1067x800.jpg 1067w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-768x576.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-1536x1152.jpg 1536w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-2048x1536.jpg 2048w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635547_1609347418379-600x450.jpg 600w" sizes="(max-width: 2560px) 100vw, 2560px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-1067x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="2560" height="1920" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333.jpg 2560w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-533x400.jpg 533w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-1067x800.jpg 1067w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-768x576.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-1536x1152.jpg 1536w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-2048x1536.jpg 2048w, https://lasham.vn/wp-content/uploads/2021/01/IMG_1609206635514_1609347417333-600x450.jpg 600w" sizes="(max-width: 2560px) 100vw, 2560px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-800x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="1100" height="1100" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712.jpg 1100w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-400x400.jpg 400w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-800x800.jpg 800w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-280x280.jpg 280w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-768x768.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-300x300.jpg 300w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-600x600.jpg 600w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235712-100x100.jpg 100w" sizes="(max-width: 1100px) 100vw, 1100px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-1067x800.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="2560" height="1920" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724.jpg 2560w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-533x400.jpg 533w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-1067x800.jpg 1067w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-768x576.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-1536x1152.jpg 1536w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-2048x1536.jpg 2048w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235724-600x450.jpg 600w" sizes="(max-width: 2560px) 100vw, 2560px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //                      <div class="gallery-col col" style="user-select: auto;">
        //               <div class="col-inner" style="user-select: auto;">
        //                 <a class="image-lightbox lightbox-gallery" href="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734.jpg" title="" style="user-select: auto;">            <div class="box has-hover gallery-box box-overlay dark" style="user-select: auto;">
        //                   <div class="box-image image-cover" style="padding-top: 75%; user-select: auto;">
        //                     <img width="1280" height="609" src="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734.jpg" class="attachment-original size-original" alt="" loading="lazy" ids="827,828,829,830,831,832,825,826" lightbox_image_size="large" col_spacing="xsmall" columns="2" image_height="75%" image_size="original" srcset="https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734.jpg 1280w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734-800x381.jpg 800w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734-768x365.jpg 768w, https://lasham.vn/wp-content/uploads/2021/01/IMG_20201230_235734-600x285.jpg 600w" sizes="(max-width: 1280px) 100vw, 1280px" style="user-select: auto;">                                  <div class="overlay fill" style="background-color: rgba(0, 0, 0, 0.15); user-select: auto;">
        //                       </div>
        //                                                                   </div>
        //                   <div class="box-text text-left" style="user-select: auto;">
        //                      <p style="user-select: auto;"></p>
        //                   </div>
        //                 </div>
        //                 </a>          </div>
        //              </div>
        //              </div>
        //         </div>
        //           </div>
        //       <div id="col-1827903971" class="col small-12 large-12" style="user-select: auto;">
        //         <div class="col-inner" style="user-select: auto;">
        //         </div>
        //           </div>
        //       </div>
        //         </div>
        //       <style style="user-select: auto;">
        //       #section_312345353 {
        //       padding-top: 30px;
        //       padding-bottom: 30px;
        //       }
        //       </style>
        //       </section>
        //       <section class="section chungnhan" id="section_1866204349">
        //   <div class="bg section-bg fill bg-fill bg-loaded">
        //   </div>
        //   <div class="section-content relative">
        // <div id="text-2989732215" class="text title-heading">
        // <h1>CHỨNG NHẬN CHẤT LƯỢNG</h1>
        //     </div>
        // <div class="row row-collapse" id="row-281345101">
        // <div id="col-2122718133" class="col medium-6 small-12 large-6">
        //   <div class="col-inner text-center">
        // <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_537024135">
        //   <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/Picture3.png">						<div class="img-inner dark">
        //     <img width="366" height="494" src="images/introductions/Picture3.png" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/Picture3.png 366w, images/introductions/Picture3-296x400.png 296w" sizes="(max-width: 366px) 100vw, 366px">
        //         </div>
        //           </a>
        // <style>
        // #image_537024135 {
        // width: 60%;
        // }
        // </style>
        // </div>
        // <div id="text-4221924893" class="text">
        // <p>CHỨNG NHẬN</p>
        // <p><strong>HỮU CƠ</strong></p>
        // <style>
        // #text-4221924893 {
        // font-size: 1.25rem;
        // text-align: center;
        // color: rgb(118, 146, 93);
        // }
        // #text-4221924893 > * {
        // color: rgb(118, 146, 93);
        // }
        // </style>
        // </div>
        //   </div>
        //     </div>
        // <div id="col-382275192" class="col medium-6 small-12 large-6">
        //   <div class="col-inner text-center">
        // <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_412829341">
        //   <a class="image-lightbox lightbox-gallery" title="" href="images/introductions/Picture4.png">						<div class="img-inner dark">
        //     <img width="366" height="494" src="images/introductions/Picture4.png" class="attachment-original size-original" alt="" loading="lazy" srcset="images/introductions/Picture4.png 366w, images/introductions/Picture4-296x400.png 296w" sizes="(max-width: 366px) 100vw, 366px">
        //         </div>
        //           </a>
        // <style>
        // #image_412829341 {
        // width: 60%;
        // }
        // </style>
        // </div>
        // <div id="text-3411664963" class="text">
        // <p>CHỨNG NHẬN</p>
        // <p><strong>KHÔNG THUỐC</strong></p>

        // <style>
        // #text-3411664963 {
        // font-size: 1.25rem;
        // text-align: center;
        // color: rgb(118, 146, 93);
        // }
        // #text-3411664963 > * {
        // color: rgb(118, 146, 93);
        // }
        // </style>
        // </div>
        //   </div>
        //     </div>
        // </div>
        //   </div>
        // <style>
        // #section_1866204349 {
        // padding-top: 30px;
        // padding-bottom: 30px;
        // background-color: rgb(249, 247, 255);
        // }
        // </style>
        // </section>',
        //             'video' => '<iframe title="LASHAM - Tinh hoa núi rừng Sobaek - Sâm Núi" width="100%" height="574" src="https://www.youtube.com/embed/6KPOPAAHLdc?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="user-select: auto;"></iframe>',
        // 'slug' => 'giơi-thieu-ve-lasham',
        //             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         ]);

        //         Introduction::insert([
        //             'title' => 'Giới thiệu về Gogogreen',
        //             'represented_image' => 'gogogreen_introduction.jpg',
        //             'description' => '<p style="user-select: auto;">&nbsp; &nbsp; Trong khi thế giới đang khủng hoảng bởi sự lạm dụng hóa chất thì Organic – con đường quay trở lại với tự nhiên, tái tạo thiên nhiên, thanh lọc sức khỏe cho con người đang trở thành một làn gió mới mang lại hy vọng cho tương lai. Nắm bắt xu thế này, công ty TNHH GogoGreen  đã ra đời với sứ mệnh mang các sản phẩm Organic đến gần hơn với Việt Nam. Những sản phẩm mà chúng tôi nhập khẩu và phân phối là những sản phẩm từ thiên nhiên, mang giá trị của thiên nhiên – Green.

        //             Hai dòng sản phẩm đầu tiên chúng tôi nhập khẩu và phân phối:

        //             1. Nhân Sâm núi chính hãng So –baek từ Hàn Quốc

        //              “Sâm núi So – baek” ( hay còn gọi là La Sâm)- là  loài sâm dành riêng cho Vương thất, có từ thời Silla. La Sâm hiện nay đang được công ty Lasham Hàn Quốc nhân giống và trồng trên núi So-beak, nơi giao hòa của không khí lạnh từ bắc trung bộ và khí hậu ấm áp từ phía Nam đã tạo ra dòng sản phẩm sâm chất lượng tốt.

        //             Với tiêu chí mang đến những sản phẩm tốt nhất cho sức khỏe, Lasham luôn cố gắng giữ lại những gì tinh túy nhất của đất trời So-beak trong sản phẩm La Sâm.

        //             2. Mỹ phẩm Craope Hàn Quốc

        //             Là dòng mỹ phẩm cao cấp của Hàn Quốc. Craope luôn tìm kiếm những yếu tố tốt cho sắc đẹp từ tự nhiên để tạo ra các sản phẩm mang đến cho người sử dụng một tương lai khỏe mạnh, tươi đẹp bằng các nghiên cứu kĩ thuật khoa học hiện đại. Craope cam kết mang đến sắc đẹp toàn diện cho cộng đồng, cho cuộc sống con người tốt đẹp hơn.</p>',
        //             'content' => '<p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;"><strong style="user-select: auto;">VỀ CHÚNG TÔI</strong></span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;">Trong khi thế giới đang khủng hoảng bởi sự lạm dụng hóa chất thì Organic – con đường quay trở lại với tự nhiên, tái tạo thiên nhiên, thanh lọc sức khỏe cho con người đang trở thành một làn gió mới mang lại hy vọng cho tương lai. Nắm bắt xu thế này,&nbsp;<strong style="user-select: auto;">công ty TNHH GogoGreen </strong>&nbsp;đã ra đời với sứ mệnh mang các sản phẩm Organic đến gần hơn với Việt Nam. Những sản phẩm mà chúng tôi nhập khẩu và phân phối là những sản phẩm từ thiên nhiên, mang giá trị của thiên nhiên – Green.</span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;">Hai dòng sản phẩm đầu tiên chúng tôi nhập khẩu và phân phối:</span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;"><strong style="user-select: auto;">1. Nhân Sâm núi chính hãng So –baek từ Hàn Quốc</strong></span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;">&nbsp;“Sâm núi So – baek” ( hay còn gọi là La Sâm)- là&nbsp; loài sâm dành riêng cho Vương thất, có từ thời Silla. La Sâm hiện nay đang được công ty Lasham Hàn Quốc nhân giống và trồng trên núi So-beak, nơi giao hòa của không khí lạnh từ bắc trung bộ và khí hậu ấm áp từ phía Nam đã tạo ra dòng sản phẩm sâm chất lượng tốt.</span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;">Với tiêu chí mang đến những sản phẩm tốt nhất cho sức khỏe, Lasham luôn cố gắng giữ lại những gì tinh túy nhất của đất trời So-beak trong sản phẩm La Sâm.</span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;"><strong style="user-select: auto;">2. Mỹ phẩm Craope Hàn Quốc</strong></span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;">Là dòng mỹ phẩm cao cấp của Hàn Quốc. Craope luôn tìm kiếm những yếu tố tốt cho sắc đẹp từ tự nhiên để tạo ra các sản phẩm mang đến cho người sử dụng một tương lai khỏe mạnh, tươi đẹp bằng các nghiên cứu kĩ thuật khoa học hiện đại. Craope cam kết mang đến sắc đẹp toàn diện cho cộng đồng, cho cuộc sống con người tốt đẹp hơn.</span></p><p style="user-select: auto;"><span style="color: rgb(0, 0, 0); user-select: auto;" data-mce-style="color: #000000;"><strong style="color: rgb(0, 0, 255); user-select: auto;" data-mce-style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Công ty TNHH GogoGreen</strong>&nbsp;luôn mang đến cho cộng đồng những sản phẩm có chất lượng tốt, an toàn, hiệu quả cao, dịch vụ tốt với giá cả hợp lý bằng sự trân trọng và trách nhiệm cao nhất của mình đối với xã hội.</span><br style="user-select: auto;"></p>',
        //             'video' => null,
        //             'slug' => 'giơi-thieu-ve-gogogreen',
        //             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         ]);

    }
}