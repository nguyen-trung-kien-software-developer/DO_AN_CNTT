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
                                        <th>Mốc lịch sử</th>
                                        <th>Danh mục chính</th>

                                        @can('Chỉnh sửa lịch sử')
                                            <th>Chỉnh Sửa</th>
                                        @endcan
                                        @can('Xóa lịch sử')
                                            <th>Xóa</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $key => $history)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $history->timeline }}</td>
                                            <td>{{ $history->parentCategory->name }}</td>
                                            @can('Chỉnh sửa lịch sử')
                                                <td><a href="{{ route('admin.page.editHistory', [$history->id]) }}"
                                                        class="btn btn-info">Sửa</a></td>
                                            @endcan
                                            @can('Xóa lịch sử')
                                                <td><button class="btn btn-danger btn sweet-confirm destroy"
                                                        data-url="{{ route('admin.page.destroyHistory', $history->id) }}">Xóa</button>
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mốc lịch sử</th>
                                        <th>Danh mục chính</th>

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
