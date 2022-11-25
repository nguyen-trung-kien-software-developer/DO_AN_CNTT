@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa đơn hàng có mã <span style="color: red;">#{{ $order->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.order.update', [$order->id]) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Khách hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <select class="form-control" name="customer">
                                        <option value="">Vui lòng chọn khách hàng</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}"
                                                {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                                                {{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('customer')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('customer') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Tình trạng đơn hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-signal" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="order_status">
                                        <option value="">Vui lòng chọn tình trạng đơn hàng</option>
                                        @foreach ($orderStatuses as $orderStatus)
                                            <option value="{{ $orderStatus->id }}"
                                                {{ $order->order_status_id == $orderStatus->id ? 'selected' : '' }}>
                                                {{ $orderStatus->description }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('order_status')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('order_status') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Tình trạng giao hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-signal" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <select class="form-control" name="shipping_status">
                                        <option value="">Vui lòng chọn tình trạng giao hàng</option>
                                        @foreach ($shippingStatuses as $shippingStatus)
                                            <option value="{{ $shippingStatus->id }}"
                                                {{ $order->shipping_status_id == $shippingStatus->id ? 'selected' : '' }}>
                                                {{ $shippingStatus->description }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('shipping_status')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_status') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Tên người nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_name"
                                        placeholder="Họ và tên người nhận.." value="{{ $order->shipping_fullname }}">
                                </div>
                                @if (!empty($errors->first('shipping_name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Số điện thoại người nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_mobile"
                                        placeholder="Số điện thoại người nhận.." value="{{ $order->shipping_mobile }}">
                                </div>
                                @if (!empty($errors->first('shipping_mobile')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_mobile') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Email người nhận</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_email"
                                        placeholder="Email người nhận.." value="{{ $order->shipping_email }}">
                                </div>
                                @if (!empty($errors->first('shipping_email')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('shipping_email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Phương thức thanh toán</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-credit-card"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="payment_method">
                                        <option value="">Vui lòng chọn phương thức thanh toán</option>
                                        <option value="0" {{ $order->payment_method == 0 ? 'selected' : '' }}>COD
                                        </option>
                                        <option value="1" {{ $order->payment_method == 1 ? 'selected' : '' }}>BANK
                                        </option>
                                    </select>
                                </div>
                                @if (!empty($errors->first('payment_method')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('payment_method') }}</div>
                                @endif
                            </div>

                            @include('admin.layout.address')

                            <div class="form-group">
                                <label class="text-label">Số nhà, tên đường</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1"
                                        name="housenumber_street" value="{{ $order->shipping_housenumber_street }}"
                                        placeholder="Số nhà, tên đường..">
                                </div>
                                @if (!empty($errors->first('housenumber_street')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('housenumber_street') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Phí vận chuyển</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="shipping_fee"
                                        placeholder="0" value="{{ $order->shipping_fee }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-label">Ngày giao hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="date" class="form-control" id="val-username1" name="delivered_date"
                                        value="{{ $order->delivered_date }}" placeholder="Ngày giao hàng..">
                                </div>
                                @if (!empty($errors->first('delivered_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('delivered_date') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Mã giảm giá (nếu có)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-code" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="discount_code"
                                        placeholder="Mã giảm giá.."
                                        value="{{ !empty($order->discount_code_id) ? $order->discountCode->code : '' }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-label">Ghi chú (nếu có)</label>
                                <div class="input-group">
                                    <textarea name="note" class="form-control" id="note" cols="30" rows="10">{{ $order->note }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Danh sách sản phẩm đã mua</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Gía</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->orderItems as $orderItem)
                                            <tr class="{{ $orderItem->order_id }}-{{ $orderItem->product_id }}">
                                                <input type="hidden" name="ids[]"
                                                    value="{{ $orderItem->product_id }}">
                                                <td>{{ $orderItem->product->id }}</td>
                                                <td>{{ $orderItem->product->name }}</td>
                                                <td><input type="number" name="unit_price[]"
                                                        value="{{ $orderItem->unit_price }}" class="unit_price"
                                                        onchange="updateTotalPriceInOrderItem('{{ $orderItem->order_id }}', '{{ $orderItem->product_id }}')">
                                                </td>
                                                <td>
                                                    <div class="number_cart1">
                                                        <i class="fa fa-minus-square-o icon-soluongtru" aria-hidden="true"
                                                            onclick="updateTotalPriceInOrderItem('{{ $orderItem->order_id }}', '{{ $orderItem->product_id }}', 'decrease')"></i>
                                                        <input type="text" name="quantity[]" class="number_cart_input"
                                                            value="{{ $orderItem->qty }}"
                                                            onchange="updateTotalPriceInOrderItem('{{ $orderItem->order_id }}', '{{ $orderItem->product_id }}')">
                                                        <i class="fa fa-plus-square-o icon-soluongcong" aria-hidden="true"
                                                            onclick="updateTotalPriceInOrderItem('{{ $orderItem->order_id }}', '{{ $orderItem->product_id }}', 'increase')"></i>
                                                    </div>
                                                </td>
                                                <td class="total_price">{{ number_format($orderItem->total_price) }}
                                                    VND</td>
                                                <td>
                                                    <a class="btn btn-danger remove-product" href="javascript:void(0)"
                                                        onclick="deleteItemInBoughtList(this)">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <h4 class="card-title">Thêm Sản Phẩm Mới</h4>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Nhập số lượng sản phẩm</label>
                                <div class="input-group">
                                    <input type="number" class="form-control product_quantity" id="val-username1"
                                        name="qty" placeholder="Số lượng sản phẩm.." value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-label">Nhập tên sản phẩm</label>
                                <div class="input-group">
                                    <input type="hidden" class="adding-type" value="product-item">
                                    <input type="text" class="form-control search_product_name" id="val-username1"
                                        name="product_name" placeholder="Tên sản phẩm.." value="">
                                </div>
                                <div class="search-result">
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div class="input-group">
                                    <button class="btn btn-primary add-products-to-order">Thêm sản phẩm</button>
                                </div>
                            </div> --}}

                            <div class="table-responsive form-group mb-5">
                                <label for="example1">Danh sách sản phẩm</label>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Gía</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-productlist">
                                        <tr class="no-data">
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                            <td>No data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
