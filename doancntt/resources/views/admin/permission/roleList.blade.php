@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Vai Trò</h4>
                </div>
                <div class="card-body">
                    <span class="scroll left-scroll"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="scroll right-scroll"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>
                                            Mã
                                        </th>
                                        <th>
                                            Tên vai trò
                                        </th>
                                        @can('Cấp tác vụ cho vai trò')
                                            <th>
                                                Cấp tác vụ
                                            </th>
                                        @endcan
                                        @can('Chỉnh sửa vai trò')
                                            <th>
                                                Chỉnh sửa
                                            </th>
                                        @endcan
                                        @can('Xóa vai trò')
                                            <th>
                                                Xóa
                                            </th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="py-1">
                                                {{ $role->id }}
                                            </td>
                                            <td>
                                                {{ $role->name }}
                                            </td>
                                            @can('Cấp tác vụ cho vai trò')
                                                <td><a href="{{ route('admin.permission.assignPermission', [$role->id]) }}"
                                                        class="btn btn-success">Cấp</a></td>
                                            @endcan
                                            @can('Chỉnh sửa vai trò')
                                                <td><a href="{{ route('admin.permission.editRole', [$role->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa vai trò')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.permission.deleteRole', [$role->id]) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            Mã
                                        </th>
                                        <th>
                                            Tên vai trò
                                        </th>
                                        <th>
                                            Cấp tác vụ
                                        </th>

                                        <th>
                                            Chỉnh sửa
                                        </th>

                                        <th>
                                            Xóa
                                        </th>
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
