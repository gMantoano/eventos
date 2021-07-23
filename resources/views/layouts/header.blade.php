<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
	@yield('title_prefix', config('title_prefix', ''))
	@yield('title', config('title', 'Eventos'))
	@yield('title_postfix', config('title_postfix', ''))
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!--link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"-->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- sweet -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- toast -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/toastr/toastr.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/dist/DataTables_19_06_2020/datatables.min.css">
  <!-- link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css" -->
  <!-- datapicker -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ config('app.mainlib_url') }}/AdminLTE/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!--link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"-->
  <link rel="stylesheet" href="{{ asset('css/commun.css') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse skin-purple-light">

<div class="modal hide fade in" data-keyboard="false" data-backdrop="static" id="modal_main">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Large Modal</h4>
				<a type="button" href="javascript:;" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</a>
			</div>
			<div class="modal-body"></div>
		</div>
		<!-- /.modal-content -->
	</div>
<!-- /.modal-dialog -->
</div>

<div class="wrapper">
