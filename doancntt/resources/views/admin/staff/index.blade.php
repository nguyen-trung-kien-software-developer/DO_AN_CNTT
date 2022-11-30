@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách Thành Viên</h4>
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
                                            Tên thành viên
                                        </th>
                                        <th>
                                            Ảnh đại diện
                                        </th>
                                        {{-- <th>
                                            Ảnh bìa
                                        </th> --}}
                                        <th>
                                            Vai trò
                                        </th>
                                        <th>
                                            Tên đăng nhập
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Số điện thoại
                                        </th>
                                        <th>
                                            Kích hoạt
                                        </th>
                                        @can('Chỉnh sửa thành viên')
                                            <th>
                                                Chỉnh sửa
                                            </th>
                                        @endcan
                                        @can('Xóa thành viên')
                                            <th>
                                                Xóa
                                            </th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="py-1">
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$user->private_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$user->private_image") }}"
                                                        width="70px"></a>
                                            </td>
                                            {{-- <td class="text-center">
                                                <a href="{{ asset("storage/uploads/$user->cover_image") }}"
                                                    target="_blank"><img
                                                        src="{{ asset("storage/uploads/$user->cover_image") }}"
                                                        width="70px"></a>
                                            </td> --}}
                                            <td><strong>{!! App\Helpers\StaffHelper::getRoleName($user->id) !!}</strong></td>
                                            <td>
                                                {{ $user->username }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->mobile }}
                                            </td>
                                            <td>
                                                {!! $user->is_active == 1 ? '<i class="fa fa-check-square" style="color: green;" aria-hidden="true"></i>' : '<i class="fa fa-times-circle-o" style="color: red;" aria-hidden="true"></i>' !!}
                                            </td>
                                            @can('Chỉnh sửa thành viên')
                                                <td><a href="{{ route('admin.staff.edit', [$user->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa thành viên')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.staff.destroy', $user->id) }}">Xóa</button>
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
                                            Tên thành viên
                                        </th>
                                        <th>
                                            Ảnh đại diện
                                        </th>
                                        {{-- <th>
                                            Ảnh bìa
                                        </th> --}}
                                        <th>
                                            Vai trò
                                        </th>
                                        <th>
                                            Tên đăng nhập
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Số điện thoại
                                        </th>
                                        <th>
                                            Kích hoạt
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
