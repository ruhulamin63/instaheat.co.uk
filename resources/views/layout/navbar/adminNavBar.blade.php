<!DOCTYPE html>

<html lang="en">
	
	@include('layout.head.adminHead')
	@include('layout.topBar.adminTopBar')
	<body>
		@include('layout.sidebar.adminSideBar')
		<!-- BEGIN: Body-->
			@yield('body')
		<!-- END: Body-->
		@include('layout.footer.adminFooter')
		@include('layout.scripts.adminScripts')

	</body>
</html>
