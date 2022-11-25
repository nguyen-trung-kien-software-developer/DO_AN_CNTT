<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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


        @media print {
            body {
                margin: 0;
                box-shadow: none;
            }

            #important_thing {
                width: 100%;
                height: 100%;
                page-break-after: always
            }
        }

    </style>
</head>

<body onload="window.print()">
    <div id="important_thing" class="container">
        <div class="col-md-12">
            <div class="invoice">
                <div class="invoice-header">
                    <div class="invoice-from">
                        <address class="m-t-5 m-b-5">
                            <h5 class="text-inverse">{{ $company->name }}</h5>
                            <div class="mb-1">
                                <b>Địa chỉ:</b>
                                {{ $company->housenumber_street . ', ' . $company->ward->name . ', ' . $company->ward->district->name . ', ' . $company->ward->district->province->name }}
                            </div>
                            <div class="mb-1">
                                <b>Điện thoại:</b> {{ $company->hotline }}<br>
                            </div>
                            <div class="mb-1">
                                <b>Website:</b> {{ $company->website }}<br>
                            </div>
                            <div class="mb-1">
                                <b>Email:</b> {{ $company->email }}
                            </div>
                        </address>
                    </div>

                    <div class="invoice-date">
                        <div class="date text-inverse m-t-5">Ngày đặt hàng:
                            {{ date('d/m/Y', strtotime($order->created_date)) }}
                        </div>
                        <div class="invoice-detail">
                            <div class="mt-4">
                                <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                                <img alt='Barcode Generator TEC-IT'
                                    src="https://barcode.tec-it.com/barcode.ashx?data={{ $order->id }}&code=Code128" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end invoice-header -->
                <!-- begin invoice-content -->
                <div class="invoice-content">
                    <div class="row">
                        <div class="col-8">
                            <div class="table-responsive">
                                <table class="table table-invoice">
                                    <thead>
                                        <tr>
                                            <th width="5%">Mã sản phẩm</th>
                                            <th class="text-center" width="20%">Tên sản phẩm</th>
                                            <th class="text-center" width="5%">Số lượng</th>
                                            <th class="text-right" width="20%">Đơn Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $subTotal = 0;
                                        @endphp
                                        @foreach ($order->orderItems as $orderItem)
                                            @php
                                                $subTotal += $orderItem->total_price;
                                            @endphp
                                            <tr>
                                                <td>
                                                    <span class="text-inverse">{{ $orderItem->product->id }}</small>
                                                </td>
                                                <td class="text-center">{{ $orderItem->product->name }}</td>
                                                <td class="text-center">{{ $orderItem->qty }}</td>
                                                <td class="text-right">
                                                    {{ number_format($orderItem->unit_price) }} ₫
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body" style="width: 100%">
                                <div class="basic-list-group" style="">
                                    <div class="list-group" style="">
                                        <a href="javascript:void()"
                                            class="list-group-item list-group-item-action flex-column align-items-start"
                                            style="">
                                            <div class="d-flex w-100 justify-content-between" style="">
                                                <strong class="mb-3">Thông tin thanh toán
                                                </strong>
                                            </div>
                                            @php
                                                $total_price = $subTotal - (!empty($order->discountCode) ? $order->discountCode->discount_price : 0) + $order->shipping_fee;
                                            @endphp
                                            <div>
                                                {{-- <label class="card-title mb-2" style=""> --}}
                                                <div class="row mb-1 card-title">
                                                    <div class="col-6">
                                                        <b>Tổng giá sản phẩm:</b>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span class="mb-1">{{ number_format($subTotal) }}₫
                                                        </span>
                                                    </div>
                                                </div>
                                                {{-- </label> --}}

                                                <div class="row mb-1">
                                                    <div class="col-6">
                                                        <b>Phí vận chuyển:</b>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span class="mb-1">
                                                            {{ number_format($order->shipping_fee) }}₫</span>
                                                    </div>
                                                </div>

                                                <div class="row mb-1">
                                                    <div class="col-6">
                                                        <b>Giảm giá:</b>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span class="mb-1">
                                                            {{ !empty($order->discountCode) ? number_format($order->discountCode->discount_price) : 0 }}₫
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="row mb-1">
                                                    <div class="col-6">
                                                        <b>Tổng tiền phải trả:</b>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span class="mb-1">
                                                            {{ number_format($total_price) }}₫
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="card" style="">
                                <div class="card-header" style="">
                                    <h5 class="card-title">Thông
                                        tin cá nhân</h5>
                                </div>
                                <div class="card-body" style="">
                                    <div class="basic-list-group" style="">
                                        <div class="list-group" style="">
                                            <a href="javascript:void()"
                                                class="list-group-item list-group-item-action flex-column align-items-start"
                                                style="">
                                                <div class="d-flex w-100 justify-content-between" style="">
                                                    <strong class="mb-3">Thông tin đơn hàng
                                                    </strong>
                                                </div>
                                                <div>
                                                    <label class="card-title mb-2" style=""><b>Mã đơn hàng:</b><br>
                                                        <p class="mb-1">{{ $order->id }}</p>
                                                    </label>
                                                    <label class="card-title mb-2" style=""><b>Ngày đặt hàng:</b><br>
                                                        <p class="mb-1">
                                                            {{ date('d/m/Y', strtotime($order->created_date)) }}</p>
                                                    </label>

                                                </div>
                                            </a>
                                            <a href="javascript:void()"
                                                class="list-group-item list-group-item-action flex-column align-items-start"
                                                style="">
                                                <div class="d-flex w-100 justify-content-between" style="">
                                                    <strong class="mb-3">Thông tin mua hàng
                                                    </strong>
                                                </div>
                                                <label class="card-title mb-2" style=""><b>Tên người
                                                        nhận:</b><br>
                                                    <span
                                                        class="mb-1">{{ $order->shipping_fullname }}</span>
                                                </label>
                                                <label class="card-title mb-2" style=""><b>Địa chỉ giao hàng:</b><br>
                                                    <span
                                                        class="mb-1">{{ $order->shipping_housenumber_street . ', ' . $order->ward->name . ', ' . $order->ward->district->name . ', ' . $order->ward->district->province->name }}</span>
                                                </label>
                                                <label class="card-title mb-2" style=""><b>Số điện thoại
                                                        người nhận:</b> <br><span class="mb-1">
                                                        {{ $order->shipping_mobile }}</span>
                                                </label>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end invoice-content -->
                <!-- begin invoice-note -->
                <div class="invoice-note">
                    *Nếu bạn có thắc mắc, vui lòng liên hệ chúng tôi qua email {{ $company->email }} hoặc
                    {{ $company->hotline }} <br>
                    *Thông tin chuyển khoản của Shop - Số tài khoản : {{ $company->bank_account }}
                </div>
                <!-- end invoice-note -->
                <!-- begin invoice-footer -->
                <div class="invoice-footer">
                    <p class="text-center m-b-5 f-w-600">
                        CHÂN THÀNH CÁM ƠN KHÁCH HÀNG
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i>
                            {{ $company->website }}</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone"></i>
                            {{ $company->advise_phone }}</span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i>
                            {{ $company->email }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

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
