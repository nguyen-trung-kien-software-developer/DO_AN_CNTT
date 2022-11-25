@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tạo mới đơn hàng</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.order.store') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Khách hàng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <select class="form-control" name="customer">
                                        <option value="">Vui lòng chọn khách hàng</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">
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
                                            <option value="{{ $orderStatus->id }}">
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
                                            <option value="{{ $shippingStatus->id }}">
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
                                        placeholder="Họ và tên người nhận.." value="">
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
                                        placeholder="Số điện thoại người nhận.." value="">
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
                                        placeholder="Email người nhận.." value="">
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
                                        <span class="input-group-text"> <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="payment_method">
                                        <option value="">Vui lòng chọn phương thức thanh toán</option>
                                        <option value="0">COD</option>
                                        <option value="1">BANK</option>
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
                                        name="housenumber_street" value="" placeholder="Số nhà, tên đường..">
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
                                        placeholder="0" value="" readonly>
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
                                        value="" placeholder="Ngày giao hàng..">
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
                                        placeholder="Mã giảm giá.." value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-label">Ghi chú (nếu có)</label>
                                <div class="input-group">
                                    <textarea name="note" class="form-control" id="note" cols="30" rows="10"></textarea>
                                </div>
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

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
