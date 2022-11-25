@extends('admin.layout.main')

@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile">
                <div class="profile-head">
                    <div class="photo-content">

                        <div class="cover-photo">
                            {{-- @php
                                $coverImage = auth()->user()->cover_image;
                            @endphp
                            <img src="{{ asset("storage/uploads/$coverImage") }}" width="100%" height="250px" alt=""
                                style="border-radius: 12px;"> --}}
                            <div style="width:100%; height:250px; background-color: #593bdb; border-radius: 12px;"></div>
                        </div>
                        <div class="profile-photo">
                            @php
                                $privateImage = auth()->user()->private_image;
                            @endphp
                            <img src="{{ asset("storage/uploads/$privateImage") }}" class="img-fluid rounded-circle"
                                alt="">
                        </div>
                    </div>
                    <div class="profile-info">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                        <div class="profile-name">
                                            <h4 class="text-primary">{{ auth()->user()->name }}</h4>
                                            <p>{!! App\Helpers\StaffHelper::getRoleName(auth()->user()->id) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">

                                <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                        class="nav-link active show">About Me</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                        class="nav-link">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="about-me" class="tab-pane fade active show">
                                    <div class="profile-personal-info mt-4">
                                        <h4 class="text-primary mb-4">Thông tin cá nhân</h4>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Họ tên <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>{{ auth()->user()->name }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Tên người dùng (username) <span
                                                        class="pull-right">:</span></h5>
                                            </div>
                                            <div class="col-9"><span>{{ auth()->user()->username }}
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-3">
                                                <h5 class="f-w-500">Số điện thoại <span
                                                        class="pull-right">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-9"><span>{{ auth()->user()->mobile }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-settings" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Cập nhật tài khoản</h4>
                                            <form id="update_private_information_form"
                                                action="{{ route('admin.users.updatePrivateInformation') }}"
                                                method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Họ tên</label>
                                                        <input type="text" name="fullname" placeholder="Họ và tên"
                                                            class="form-control" value="{{ auth()->user()->name }}">
                                                        @if (!empty($errors->first('fullname')))
                                                            <div class="col-md-6"
                                                                style="color:red; margin-bottom:12px;">
                                                                {{ $errors->first('fullname') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tên người dùng (username)</label>
                                                        <input type="text" name="username" placeholder="Tên người dùng"
                                                            class="form-control" value="{{ auth()->user()->username }}">

                                                        @if (!empty($errors->first('username')))
                                                            <div class="col-md-6"
                                                                style="color:red; margin-bottom:12px;">
                                                                {{ $errors->first('username') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Email</label>
                                                        <input type="email" name="email" placeholder="Email"
                                                            class="form-control" value="{{ auth()->user()->email }}">
                                                        @if (!empty($errors->first('email')))
                                                            <div class="col-md-6"
                                                                style="color:red; margin-bottom:12px;">
                                                                {{ $errors->first('email') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Số điện thoại</label>
                                                        <input type="phone" name="mobile" placeholder="Số điện thoại"
                                                            class="form-control" value="{{ auth()->user()->mobile }}">
                                                        @if (!empty($errors->first('mobile')))
                                                            <div class="col-md-6"
                                                                style="color:red; margin-bottom:12px;">
                                                                {{ $errors->first('mobile') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Password</label>
                                                        <input type="password" name="password" placeholder="Password"
                                                            class="form-control"
                                                            value="{{ auth()->user()->password }}">
                                                        @if (!empty($errors->first('password')))
                                                            <div class="col-md-6"
                                                                style="color:red; margin-bottom:12px;">
                                                                {{ $errors->first('password') }}</div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-primary" type="button">ảnh
                                                                    đại diện</button>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input">
                                                                <input type="hidden" name="private_image"
                                                                    value="{{ $privateImage }}">
                                                                <label class="custom-file-label">Choose file</label>
                                                            </div>
                                                            @if (!empty($errors->first('private_image')))
                                                                <div class="col-md-6"
                                                                    style="color:red; margin-bottom:12px;">
                                                                    {{ $errors->first('private_image') }}</div>
                                                            @endif
                                                        </div>
                                                        <input type="hidden" id="image_type" value="user_image">

                                                        <div id="image_show">
                                                            <a href="{{ asset("/storage/uploads/$privateImage") }}"
                                                                target="_blank">
                                                                <img id="upload-image"
                                                                    src="{{ asset("/storage/uploads/$privateImage") }}"
                                                                    width="100px">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- <div class="form-group col-md-6">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-primary" type="button">ảnh
                                                                    bìa</button>
                                                            </div>

                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input">
                                                                <input type="hidden" name="cover_image"
                                                                    value="{{ $coverImage }}">
                                                                <label class="custom-file-label">Choose file</label>
                                                            </div>
                                                            @if (!empty($errors->first('cover_image')))
                                                                <div class="col-md-6"
                                                                    style="color:red; margin-bottom:12px;">
                                                                    {{ $errors->first('cover_image') }}</div>
                                                            @endif
                                                        </div>
                                                        <input type="hidden" id="image_type" value="user_image">

                                                        <div id="image_show">
                                                            <a href="{{ asset("/storage/uploads/$coverImage") }}"
                                                                target="_blank">
                                                                <img id="upload-image"
                                                                    src="{{ asset("/storage/uploads/$coverImage") }}"
                                                                    width="100%" height="200px">
                                                            </a>
                                                        </div>
                                                    </div> --}}
                                                </div>

                                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
