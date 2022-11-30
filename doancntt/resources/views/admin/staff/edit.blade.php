@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa thành viên có mã <span
                            style="color: red;">#{{ $user->id }}</span></h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon" action="{{ route('admin.staff.update', $user->id) }}"
                            method="POST" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-label">Tên thành viên</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="name"
                                        placeholder="Tên thành viên.." value="{{ $user->name }}">
                                </div>
                                @if (!empty($errors->first('name')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Vai trò</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-signal" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <select class="form-control" name="role">
                                        <option value="">Vui lòng chọn vai trò</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}"
                                                {{ App\Helpers\StaffHelper::getRoleName($user->id) == $role->name ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if (!empty($errors->first('role')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('role') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="email"
                                        placeholder="Email.." value="{{ $user->email }}">
                                </div>
                                @if (!empty($errors->first('email')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Số điện thoại</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-mobile" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="mobile"
                                        placeholder="Số điện thoại.." value="{{ $user->mobile }}">
                                </div>
                                @if (!empty($errors->first('mobile')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('mobile') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Tên người dùng</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="username"
                                        placeholder="Tên người dùng.." value="{{ $user->username }}">
                                </div>
                                @if (!empty($errors->first('username')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('username') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-label">Mật khẩu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" id="val-username1" name="password"
                                        placeholder="Mật khẩu.." value="{{ $user->password }}">
                                </div>
                                @if (!empty($errors->first('password')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">ảnh
                                            đại diện</button>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="private_image" value="{{ $user->private_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('private_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('private_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="user_image">

                                <div id="image_show">
                                    <a href="{{ asset("/storage/uploads/$user->private_image") }}" target="_blank">
                                        <img id="upload-image" src="{{ asset("/storage/uploads/$user->private_image") }}"
                                            width="100px">
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">ảnh
                                            bìa</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="cover_image" value="{{ $user->cover_image }}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('cover_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('cover_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="user_image">

                                <div id="image_show">
                                    <a href="{{ asset("/storage/uploads/$user->cover_image") }}" target="_blank">
                                        <img id="upload-image" src="{{ asset("/storage/uploads/$user->cover_image") }}"
                                            width="100px">
                                    </a>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="is_active" class="form-check-input" value="1"
                                            {{ $user->is_active == 1 ? 'checked' : '' }}>Kích
                                        hoạt
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
