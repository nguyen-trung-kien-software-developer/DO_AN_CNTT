@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Vận Chuyển</h4>
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
                                        <th>Tỉnh/Thành Phố</th>
                                        <th>Giá</th>
                                        @can('Chỉnh sửa vận chuyển')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa vận chuyển')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transports as $key => $transport)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $transport->province->name }}</td>
                                            <td>{{ $transport->price }}</td>
                                            @can('Chỉnh sửa vận chuyển')
                                                <td><a href="{{ route('admin.transport.edit', [$transport->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa vận chuyển')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.transport.destroy', $transport->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tỉnh/Thành Phố</th>
                                        <th>Giá</th>
                                        @can('Chỉnh sửa vận chuyển')
                                            <th>Chỉnh sửa</th>
                                        @endcan
                                        @can('Xóa vận chuyển')
                                            <th>Xóa</th>
                                        @endcan
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
