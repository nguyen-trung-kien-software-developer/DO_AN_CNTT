@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.forget.password.get') }}">Quên mật
                        khẩu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1 wrapper_full_5">
            <div class="register_user clearfix">
                <form class="login_form_user" method="POST" action="{{ route('site.customer.forget.password.post') }}">
                    @csrf
                    <div class="title_user clearfix">
                        <h1>{{ $company->name }}</h1>
                        <p>Quên mật khẩu</p>
                    </div>
                    @include('site.layout.alert')
                    <div class="wp_input_user_login">
                        <input type="email" name="email" value="" class="input_user"
                            placeholder="Nhập địa chỉ Email bạn đăng ký">
                    </div>
                    <div class="wp_input_user2"> <input type="submit" class="submit_update" id="btn_forgot" value="Gửi">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
