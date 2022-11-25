<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('admin.layout.head')
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-6" style="background-color: rgb(31, 188, 0);">
                                <img src="{{ asset("storage/uploads/$company->logo") }}" width="100%" height="100%"
                                    alt="{{ $company->name }}">
                            </div>
                            <div class="col-xl-6">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Đăng nhập tài khoản</h4>
                                    <form id="user_login_form" action="{{ route('admin.users.auth') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mật khẩu</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" name="remember" type="checkbox"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Nhớ mật
                                                        khẩu</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p><i class="fa fa-arrow-left mr-2" aria-hidden="true"></i><a
                                                class="text-primary" href="{{ route('site.home') }}">Trở lại trang
                                                chủ</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.layout.footer')
</body>

</html>
