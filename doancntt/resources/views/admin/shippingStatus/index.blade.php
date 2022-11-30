@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tình Trạng Giao Hàng</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Mô tả</th>
                                        @can('Chỉnh sửa tình trạng giao hàng')
                                            <th>Chỉnh Sửa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shippingStatuses as $key => $shippingStatus)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $shippingStatus->name }}</td>
                                            <td>{{ $shippingStatus->description }}</td>
                                            @can('Chỉnh sửa tình trạng giao hàng')
                                                <td><a href="{{ route('admin.shippingStatus.edit', [$shippingStatus->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Mô tả</th>

                                        <th>Chỉnh Sửa</th>
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
