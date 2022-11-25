@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Đánh Gía Của Sản Phẩm Mã <span
                            style="color: red;">#{{ $product->id }}</span></h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Tên</th>
                                        <th>Số sao</th>
                                        <th>Ngày Tạo</th>
                                        <th>Nội dung</th>
                                        <th>Sửa</th>
                                        {{-- @can('Xóa đánh giá sản phẩm') --}}
                                            <th>Xóa</th>
                                        {{-- @endcan --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->fullname }}</td>
                                            <td>{{ $comment->star }}</td>
                                            <td>{{ $comment->created_date }}</td>
                                            <td>{{ $comment->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.comment.edit', [$comment->id]) }}"
                                                    class="btn btn-info">Sửa
                                                </a>
                                            </td>
                                            {{-- @can('Xóa đánh giá sản phẩm') --}}
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.product.destroyComment', $comment->id) }}">Xóa</button>
                                                </td>
                                            {{-- @endcan --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Email</th>
                                        <th>Tên</th>
                                        <th>Số sao</th>
                                        <th>Ngày Tạo</th>
                                        <th>Nội dung</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="basic-form mt-5">
                        <h4 class="card-title">
                            Tạo đánh giá của Sản Phẩm có mã #<span style="color: red;">#{{ $product->id }}</span>
                        </h4>
                        <form class="form-valide-with-icon"
                            action="{{ route('admin.comment.storeOfProduct', $product->id) }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Họ Tên</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="val-username1" name="fullname"
                                        placeholder="Họ Tên.." value="">
                                </div>
                                @if (!empty($errors->first('fullname')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('fullname') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Ngày tạo đánh giá</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="date-format1" name="created_date"
                                        class="form-control date-time-1" placeholder="Ngày tạo đánh giá.."
                                        data-dtp="dtp_qv6YX"
                                        value="{{ date('d-m-Y h:m:s', strtotime($product->created_date)) }}">
                                </div>
                                @if (!empty($errors->first('created_date')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('created_date') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Số sao</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" id="val-username1" name="star"
                                        value="" placeholder="Số sao..">
                                </div>
                                @if (!empty($errors->first('star')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('star') }}</div>
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
                                        placeholder="Email.." value="">
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
                                        placeholder="Số điện thoại.." value="">
                                </div>
                                @if (!empty($errors->first('mobile')))
                                    <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                        {{ $errors->first('mobile') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-label">Mô tả</label>
                                <div class="input-group">
                                    <textarea name="description" class="form-control" id="note" cols="30" rows="7"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm đánh giá</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
