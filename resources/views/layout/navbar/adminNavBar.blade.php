<!DOCTYPE html>

<html lang="en">
	
	@include('layout.head.adminHead')
	
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		@include('layout.topBar.adminTopBar')
		@include('layout.sidebar.adminSideBar')
		<!-- BEGIN: Body-->
		@yield('body')
		<!-- END: Body-->
		@include('layout.footer.adminFooter')
		@include('layout.scripts.adminScripts')

	</body>
</html>
