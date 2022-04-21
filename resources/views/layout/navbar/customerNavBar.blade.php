<!DOCTYPE html>
<html lang="en">

    @include('layout.head.customerHead')
	@include('layout.topBar.customerTopBar')
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!-- BEGIN: Body-->
			@yield('body')
		<!-- END: Body-->
		@include('layout.footer')
		@include('layout.scripts.customerScripts')
	</body>
</html>
