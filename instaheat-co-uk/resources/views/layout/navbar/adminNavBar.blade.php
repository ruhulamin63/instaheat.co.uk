<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
        <base href="">
		<meta charset="utf-8" />

		<title><?=$title?></title>

		<meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Craft, bootstrap, Angular 10, Vue, React, Laravel, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/start" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />


		<meta name="csrf-token" content="{{ csrf_token() }}">


		<link rel="shortcut icon" href="{{asset('media/fabric icon/car-service.png')}}" />
		<link rel="shortcut icon" href="{{asset('media/fabric icon/car-service.png')}}" />
		<!--begin::Fonts-->
        <link rel="stylesheet" href="{{asset('css/fonts_googleapis_300_400_500_600_700.css')}}"/>
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/graph.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		<link href="{{asset('Theme/vendor/fontawesome-free/css/all.min.css')}}">
		<link href="{{asset('Theme/css/sb-admin-2.min.css" rel="stylesheet')}}">
		<link href="{{asset('Theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet')}}">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	
		<!-- Custom fonts for this template-->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			  rel="stylesheet">
		<!-- Custom styles for this template-->

    	<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

	</head>
    <!--end::Head-->

		@include('layout.topBar.adminTopBar')
		@include('layout.sidebar.adminSideBar')
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		
		<!-- BEGIN: Body-->
		@yield('body')
		<!-- END: Body-->
		@include('layout.footer.adminFooter')
		@include('layout.scripts.adminScripts')

	</body>
</html>
