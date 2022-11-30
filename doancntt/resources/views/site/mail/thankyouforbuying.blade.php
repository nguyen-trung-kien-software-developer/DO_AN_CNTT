<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }

        @media (max-width: 576px) {
            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 14px !important;
                font-weight: 100 !important;
            }

            span {
                font-size: 14px !important;
            }

            a {
                font-size: 18px !important;
            }

            img {
                width: 50px !important;
                max-width: 200px !important;
            }

            div {
                width: 100% !important
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: rgb(31, 188, 0);
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #f7fafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/
        .btn {
            padding: 10px 15px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: rgb(31, 188, 0);
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        .btn-custom {
            color: rgba(0, 0, 0, .3);
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Work Sans', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: rgb(31, 188, 0);
        }

        table {}

        /*LOGO*/

        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: rgb(31, 188, 0);
            font-size: 24px;
            font-weight: 700;
            font-family: 'Work Sans', sans-serif;
        }

        /*HERO*/
        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 34px;
            margin-bottom: 15px;
            font-weight: 300;
            line-height: 1.2;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 200;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #000;
        }


        /*PRODUCT*/
        .product-entry {
            display: block;
            position: relative;
            float: left;
            padding-top: 20px;
        }

        .product-entry .text {
            width: calc(100% - 125px);
            padding-left: 20px;
        }

        .product-entry .text h3 {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .product-entry .text p {
            margin-top: 0;
        }

        .product-entry img,
        .product-entry .text {
            float: left;
        }

        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
        }

        /*FOOTER*/

        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }


        @media screen and (max-width: 500px) {}
    </style>
    <style>
        body {
            font-size: 16px;
            margin-top: 20px;
            background: #eee;
            text-decoration: none !important;
        }

        .invoice {
            background: #fff;
            padding: 20px
        }

        .invoice-company {
            font-size: 20px
        }

        .invoice-header {
            margin: 0 -20px;
            padding: 20px
        }

        .invoice-date,
        .invoice-from,
        .invoice-to {
            display: table-cell;
            /* width: 1% */
        }

        .invoice-from,
        .invoice-to {
            padding-right: 20px
        }

        .invoice-date .date,
        .invoice-from strong,
        .invoice-to strong {
            font-size: 16px;
            font-weight: 600
        }

        .invoice-date {
            text-align: right;
            padding-left: 20px
        }

        .invoice-price {
            background: #f0f3f4;
            display: table;
            width: 100%
        }

        .invoice-price .invoice-price-left,
        .invoice-price .invoice-price-right {
            display: table-cell;
            padding: 20px;
            font-size: 20px;
            font-weight: 600;
            width: 75%;
            position: relative;
            vertical-align: middle
        }

        .invoice-price .invoice-price-left .sub-price {
            display: table-cell;
            vertical-align: middle;
            padding: 0 20px
        }

        .invoice-price small {
            font-size: 12px;
            font-weight: 400;
            display: block
        }

        .invoice-price .invoice-price-row {
            display: table;
            float: left
        }

        .invoice-price .invoice-price-right {
            width: 25%;
            background: #2d353c;
            color: #fff;
            font-size: 28px;
            text-align: right;
            vertical-align: bottom;
            font-weight: 300
        }

        .invoice-price .invoice-price-right small {
            display: block;
            opacity: .6;
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 12px
        }

        .invoice-footer {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            font-size: 10px
        }

        .invoice-note {
            color: #999;
            margin-top: 80px;
            font-size: 85%
        }

        .invoice>div:not(.invoice-footer) {
            margin-bottom: 20px
        }

        .btn.btn-white,
        .btn.btn-white.disabled,
        .btn.btn-white.disabled:focus,
        .btn.btn-white.disabled:hover,
        .btn.btn-white[disabled],
        .btn.btn-white[disabled]:focus,
        .btn.btn-white[disabled]:hover {
            color: #2d353c;
            background: #fff;
            border-color: #d9dfe3;
        }

        /* label {
        display: block !important;
    } */

        .card-body {
            padding: 0 !important;
        }

        b {
            display: inline-block;
        }

        span {
            display: inline-block;
        }
    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
    <center style="width: 100%; background-color: #f1f1f1;">
        <div
            style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto;">
                <tr>
                    <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="logo" style="text-align: left;">
                                    <h1><a href="#">{{ config('app.name') }}</a></h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="padding: 0 2.5em; text-align: left;">
                                    <div class="text">
                                        <h2>Thư cám ơn đã mua hàng tại {{ config('app.name') }}</h2>
                                        <h3>Chân thành cám ơn và tri ân đến khách hàng {{ $data['customer_name'] }}.
                                            Hẹn gặp lại !</h3>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <table class="bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        width="100%">
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <th width="70%"
                                style="text-align:left; padding: 0 2.5em; color: #000; padding-bottom: 20px">Sản Phẩm
                            </th>

                            <th width="30%"
                                style="text-align:right; padding: 0 2.5em; color: #000; padding-bottom: 20px">Giá
                            </th>
                        </tr>
                        @php
                            $subTotal = 0;
                        @endphp
                        @foreach ($data['orderItems'] as $orderItem)
                            @php
                                $subTotal += $orderItem->total_price;
                            @endphp
                            <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                                <td valign="middle" width="70%" style="text-align:left; padding: 0 2.5em;">
                                    <div class="product-entry">
                                        @php
                                            $featured_image = $orderItem->product->featured_image;
                                        @endphp
                                        <img src="{{ asset("storage/uploads/$featured_image") }}" alt=""
                                            style="width: 100px; max-width: 600px; height: auto; margin-bottom: 20px; display: block;">
                                        <div class="text">
                                            <h3>{{ $orderItem->product->name }}</h3>
                                        </div>
                                    </div>
                                </td>

                                <td valign="middle" width="30%" style="text-align:left; padding: 0 2.5em;">
                                    <span class="price"
                                        style="color: #000; font-size: 20px;">{{ number_format($orderItem->total_price) }}
                                        ₫</span>
                                </td>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <td valign="middle" style="text-align:left; padding: 1em 2.5em;">
                                <p><a href="{{ env('APP_URL') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
                                </p>
                            </td>
                        </tr> --}}
                    </table>
                </tr>
                <tr>
                    <td valign="middle" style="text-align:center;">
                        <h2 style="text-align:center; font-weight:600;">Thông tin thanh toán</h2>
                    </td>
                </tr>
                <tr>
                    <table class="  bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        width="100%">
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Tổng giá sản phẩm:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ number_format($subTotal) }}₫</span>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Phí vận chuyển:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ number_format($data['order']->shipping_fee) }}₫</span>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Giảm giá:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ !empty($data['order']->discountCode) ? number_format($data['order']->discountCode->discount_price) : 0 }}₫</span>
                            </td>
                        </tr>
                        @php
                            $total_price = $subTotal - (!empty($data['order']->discountCode) ? $data['order']->discountCode->discount_price : 0) + $data['order']->shipping_fee;
                        @endphp
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Tổng tiền phải trả:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ number_format($total_price) }}₫</span>
                            </td>
                        </tr>
                    </table>
                </tr>
                <tr>
                    <td valign="middle" style="text-align:center;">
                        <h2 style="text-align:center; font-weight:600;">Thông tin giao hàng</h2>
                    </td>
                </tr>
                <tr>
                    <table class="  bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        width="100%">
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Tên người nhận:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ $data['order']->shipping_fullname }}</span>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Số điện thoại người nhận:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ $data['order']->shipping_mobile }}</span>
                            </td>
                        </tr>
                        @php
                            $total_price = $subTotal - (!empty($data['order']->discountCode) ? $data['order']->discountCode->discount_price : 0) + $data['order']->shipping_fee;
                        @endphp
                        <tr style="border-bottom: 1px solid rgba(0,0,0,.05);">
                            <td valign="middle" width="60%" style="text-align:left; padding: 0 2.5em;">
                                <div class="product-entry" style="width: 100%">
                                    <div class="text">
                                        <h3>Địa chỉ giao hàng:</h3>
                                    </div>
                                </div>
                            </td>

                            <td valign="middle" width="40%" style="text-align:left; padding: 0 2.5em;">
                                <span class="price"
                                    style="color: #000; font-size: 20px;">{{ $data['order']->shipping_housenumber_street . ', ' . $data['order']->ward->name . ', ' . $data['order']->ward->district->name . ', ' . $data['order']->ward->district->province->name }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="middle" style="text-align:left; padding: 1em 2.5em;">
                                <p><a href="{{ env('APP_URL') }}" class="btn btn-primary">Tiếp tục mua hàng</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </tr>
            </table>

            {{-- <div class="card-body bg_white" style="width: 100%;">
                <div class="basic-list-group">
                    <div class="list-group">
                        <a href="javascript:void()"
                            class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <strong class="mb-3">Thông tin
                                    thanh toán
                                </strong>
                            </div>
                            <div>

                                <div class="row mb-1 card-title">
                                    <div class="col-6">
                                        <b>Tổng giá sản phẩm:</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="mb-1">86,000,000₫
                                        </span>
                                    </div>
                                </div>


                                <div class="row mb-1">
                                    <div class="col-6">
                                        <b>Phí vận chuyển:</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="mb-1">
                                            50,000₫</span>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-6">
                                        <b>Giảm giá:</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="mb-1">
                                            0₫
                                        </span>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-6">
                                        <b>Tổng tiền phải
                                            trả:</b>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="mb-1">
                                            86,050,000₫
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>
            </div> --}}
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto;">
                <tr>
                    <td class="bg_light" style="text-align: center;">
                        <p style="text-align: center;">CHÂN THÀNH CÁM ƠN KHÁCH HÀNG ! Truy cập <a
                                href="{{ env('APP_URL') }}"
                                style="color: rgba(0,0,0,.8);">{{ config('app.name') }}</a></p>
                    </td>
                </tr>
            </table>

        </div>
    </center>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
