@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.accountInformation') }}">Thông tin tài khoản</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            @include('site.layout.accountSideBar')
            <div class="right_account_user">
                <div class="right_account_user1">
                    <h1 class="h1_2">Thông tin tài khoản</h1>
                    @include('site.layout.alert')
                    <form id="account_information_form" method="POST"
                        action="{{ route('site.customer.updateAccountInformation') }}">
                        @csrf
                        @method('PUT')
                        <div class="update_div_input">
                            <p>Email</p>
                            <div class="input_update_frm"> <i onclick="enable_edit('email')"></i> <input type="email"
                                    class="input_update" value="{{ Auth::guard('customer')->user()->email }}"
                                    readonly="true" name="email"> </div>
                        </div>
                        <div class="update_div_input">
                            <p>Họ Tên</p>
                            <div class="input_update_frm"> <i onclick="enable_edit('fullname')"></i> <input type="text"
                                    class="input_update" value="{{ Auth::guard('customer')->user()->name }}"
                                    readonly="true" name="fullname"> </div>
                        </div>
                        <div class="update_div_input">
                            <p>Địa chỉ</p>
                            <div class="input_update_frm"> <i onclick="enable_edit('housenumber_street')"></i> <input
                                    type="text" class="input_update"
                                    value="{{ Auth::guard('customer')->user()->housenumber_street }}" readonly="true"
                                    name="housenumber_street"> </div>
                        </div>
                        <div class="update_div_input">
                            <p>Điên thoại ( <b>*</b> )</p>
                            <div class="input_update_frm"> <i onclick="enable_edit('mobile')"></i> <input type="text"
                                    class="input_update" value="{{ Auth::guard('customer')->user()->mobile }}"
                                    readonly="true" name="mobile"> </div>
                        </div>
                        <div class="update_div_input">
                            <p>Địa chỉ giao hàng</p>
                            <div class="wp_distric input_update_frm">
                                @include('site.layout.address')
                            </div>
                        </div>
                        <div class="update_div_input">
                            <p></p>
                            <input type="submit" class="submit_update" name="" value="Cập nhập">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
