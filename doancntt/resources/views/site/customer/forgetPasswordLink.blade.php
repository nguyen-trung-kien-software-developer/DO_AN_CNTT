@extends("site.layout.main")

@section('content')
    <div class="wrapper_full wrapper_full_border_1">
        <div class="wrapper_full_1">
            <div class="wrapper_full_4">
                <div class="title_cate_list"> <a href="{{ route('site.home') }}" class="fist_menu_cate_a">Trang chủ</a> <a
                        href="{{ route('site.customer.reset.password.get', $token) }}">Reset Password</a> </div>
            </div>
        </div>
    </div>
    <div class="wrapper_full">
        <div class="wrapper_full_1">
            <div class="right_account_user" style="margin-bottom: 10px;">
                <div class="right_account_user1">
                    <h1 class="h1_2">Đổi mật khẩu</h1>
                    @include('site.layout.alert')
                    <form id="reset_password_form" method="POST"
                        action="{{ route('site.customer.reset.password.post') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="update_div_input">
                            <p>Email ( <b>*</b> )</p>
                            <div class="input_update_frm"> <input type="email" name="email" value="" class="input_user"
                                    placeholder="Nhập địa chỉ Email bạn đăng ký"> </div>
                            <span class="error-message"
                                style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="update_div_input">
                            <p>Mật khẩu mới ( <b>*</b> )</p>
                            <div class="input_update_frm"> <input type="password" name="password" class="input_update"
                                    value=""> </div>
                            <span class="error-message"
                                style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="update_div_input">
                            <p>Xác nhận mật khẩu mới ( <b>*</b> )</p>
                            <div class="input_update_frm"> <input type="password" name="password_confirmation"
                                    class="input_update" value=""> </div>
                            <span class="error-message"
                                style="color:red; margin-bottom:20px; display:inline-block;">{{ $errors->first('password_confirmation') }}</span>
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
