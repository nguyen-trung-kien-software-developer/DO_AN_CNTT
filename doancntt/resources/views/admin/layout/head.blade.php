<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>{{ $headerData->company['name'] }} - Admin</title>
<!-- Favicon icon -->
@php
$favicon = $headerData->company['favicon'];
@endphp
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset("storage/uploads/$favicon") }}">
<!-- Daterange picker -->
<link href="{{ asset('template/admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<!-- Clockpicker -->
<link href="{{ asset('template/admin/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
<!-- asColorpicker -->
<link href="{{ asset('template/admin/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
<!-- Material color picker -->
<link
    href="{{ asset('template/admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
    rel="stylesheet">
<!-- Pick date -->

<link rel="stylesheet" href="{{ asset('template/admin/vendor/pickadate/themes/default.css') }}">
<link rel="stylesheet" href="{{ asset('template/admin/vendor/pickadate/themes/default.date.css') }}">
<link href="{{ asset('template/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('template/admin/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ asset('template/admin/icons/font-awesome-old/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('template/admin/css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')
