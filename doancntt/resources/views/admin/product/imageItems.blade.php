@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Hình Ảnh Của Sản Phẩm Mã <span
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
                                        <th>Mã</th>
                                        <th>Hình ảnh</th>
                                        {{-- @can('Xóa hình ảnh liên quan sản phẩm') --}}
                                        <th>Xóa</th>
                                        {{-- @endcan --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product->images as $image)
                                        <tr>
                                            <td>{{ $image->id }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$image->name") }}" target="_blank"><img
                                                        src="{{ asset("storage/uploads/$image->name") }}"
                                                        width="80px"></a>
                                            </td>
                                            {{-- @can('Xóa hình ảnh liên quan sản phẩm') --}}
                                            <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                    data-url="{{ route('admin.product.deleteImageItems', $image->id) }}">Xóa</button>
                                            </td>
                                            {{-- @endcan --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Hình ảnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="basic-form mt-5">
                        <form class="form-valide-with-icon"
                            action="{{ route('admin.product.uploadImageItems', $product->id) }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-label">Hình ảnh sản phẩm (kích thước tối thiểu 600 x 600)</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Tải ảnh lên</button>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <input type="hidden" name="featured_image" value="">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if (!empty($errors->first('featured_image')))
                                        <div class="col-md-6" style="color:red; margin-bottom:12px;">
                                            {{ $errors->first('featured_image') }}</div>
                                    @endif
                                </div>
                                <input type="hidden" id="image_type" value="product_image">

                                <div id="image_show">

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
