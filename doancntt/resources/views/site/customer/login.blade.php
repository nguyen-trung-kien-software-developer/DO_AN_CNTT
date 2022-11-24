@extends('site.layout.main')

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.login') }}">Đăng nhập tài khoản</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 wrapper_full_5">
            <div class="register_user clearfix">
                <form class="login_form_user" method="post" action="{{ route('site.customer.checkLogin') }}">
                    @csrf
                    <div class="title_user clearfix">
                        <h1>{{ $company->name }}</h1>
                        <p>Đăng ký và mua sắm</p>
                    </div>
                    @include('site.layout.alert')
                    <div class="wp_input_user_login">

                        {{-- <input type="text" name="email" value="" class="input_user" placeholder="Email"> --}}
                        <input type="phone" name="mobile" value="" class="input_user" placeholder="Số điện thoại">
                        <input type="password" name="password" value="" class="input_user" placeholder="Password">

                        <div class="form-check"> <input type="checkbox" name="remember" id="remember"
                                class="form-check-input"> <label for="remember" class="form-check-label">Ghi nhớ</label>
                        </div>

                    </div>
                    <div class="wp_input_user2 clearfix">
                        <div class="forgot_pass">Quên mật khẩu? Nhấn vào <a
                                href="{{ route('site.customer.forget.password.get') }}">đây</a></div>
                        <a href="{{ route('site.customer.register') }}" class="a_dangky"> <i class="icon-dangky"></i>
                            <span>Đăng ký</span>
                        </a>
                        <div class="btn_login"> <span>Đăng nhập</span> <input type="submit" value=""> <i
                                class="icon-dangnhap"></i> </div>
                    </div>
                    <div class="wp_input_user2 clearfix">
                        <a href="{{ route('site.customer.login.facebook') }}" class="login_face">Login
                            facebook<i></i></a>
                        <a href="{{ route('site.customer.login.google') }}" class="login_gmail">Login google
                            +<i></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
