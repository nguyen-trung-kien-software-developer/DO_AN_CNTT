@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Tất Cả Lịch Sử</h4>
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
                                        <th>Tên chi nhánh</th>
                                        <th>Địa chỉ</th>
                                        <th>Thứ tự</th>
                                        @can('Chỉnh sửa chi nhánh')
                                            <th>Chỉnh Sửa</th>
                                        @endcan
                                        @can('Xóa chi nhánh')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($branches as $key => $branch)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $branch->name }}</td>
                                            <td>{{ $branch->housenumber_street . ', ' . $branch->ward->name . ', ' . $branch->ward->district->name . ', ' . $branch->ward->district->province->name }}
                                            </td>
                                            <td>{{ $branch->order }}</td>
                                            @can('Chỉnh sửa chi nhánh')
                                                <td><a href="{{ route('admin.branch.edit', [$branch->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa chi nhánh')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.branch.destroy', $branch->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên chi nhánh</th>
                                        <th>Địa chỉ</th>
                                        <th>Thứ tự</th>

                                        <th>Chỉnh Sửa</th>
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
