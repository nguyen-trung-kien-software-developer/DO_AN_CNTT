@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cấp tác vụ cho <span class="text-danger">{{ $role->name }}</span>
                    </h4>
                    <form action="{{ route('admin.permission.assignPermissionToRole', [$role->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            @foreach ($permissions as $permission)
                                <div class="col-md-9 col-lg-6">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="permission[]" type="checkbox"
                                                id="{{ $permission->id }}" value="{{ $permission->name }}"
                                                {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                            <label for="{{ $permission->id }}"
                                                class="custom-control-label">{{ $permission->name }}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary Update-permission">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
