@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.register') }}">Đăng ký tài khoản</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            <div class="register_user clearfix">
                <form class="register_form_user" method="post" action="{{ route('site.customer.checkRegister') }}">
                    @csrf
                    <div class="title_user clearfix">
                        <h1>{{ $company->name }}</h1>
                        <p>Đăng ký và mua sắm</p>
                    </div>
                    @include('site.layout.alert')
                    <div class="wp_input_user">

                        <input type="email" name="email" value="" class="input_user" placeholder="Email">

                        <input type="password" name="password" class="input_user" placeholder="Mật khẩu">

                        <input type="password" name="password_confirmation" class="input_user"
                            placeholder="Xác nhận mật khẩu">

                        <input type="text" name="fullname" value="" class="input_user" placeholder="Họ &amp; tên">

                        <input type="text" name="address" value="" class="input_user" placeholder="Địa chỉ">

                        <input type="text" name="mobile" value="" class="input_user" placeholder="Số điện thoại">
                    </div>

                    <div class="wp_input_user1 clearfix text-center">
                        <div class="btn_register m-auto text-center"> <i class="icon-dangky"></i> <span>Đăng ký</span>
                            <input type="submit" value="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
