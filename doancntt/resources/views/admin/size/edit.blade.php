@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Chỉnh sửa kích cỡ có mã <span style="color: red;">#{{ $size->id }}</span>
                    </h4>
                </div>
                <div class="card-body">
                    <form class="form-valide-with-icon" action="{{ route('admin.size.update', $size->id) }}" method="POST"
                        novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="text-label">Số size</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-exchange" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" id="val-username1" name="size_number"
                                    placeholder="Số size.." value="{{ $size->size_number }}">
                            </div>
                            @if (!empty($errors->first('size_number')))
                                <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                    {{ $errors->first('size_number') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
