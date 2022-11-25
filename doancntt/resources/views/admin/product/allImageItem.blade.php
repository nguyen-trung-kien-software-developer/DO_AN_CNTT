@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Hình Ảnh Của Sản Phẩm</h4>
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
                                        <th>Tên Sản Phẩm</th>
                                        <th>Hình ảnh</th>
                                        {{-- @can('Xóa hình ảnh liên quan sản phẩm') --}}
                                        <th>Xóa</th>
                                        {{-- @endcan --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($images as $image)
                                        <tr>
                                            <td>{{ $image->id }}</td>
                                            <td>{{ $image->product->name }}</td>
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
                </div>
            </div>
        </div>

    </div>
@endsection
