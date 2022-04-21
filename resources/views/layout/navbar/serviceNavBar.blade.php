<!DOCTYPE html>
<html lang="en">

    @include('layout.head.serviceHead')
	@include('layout.topBar.customerTopBar')
	<body>
		<!-- BEGIN: Body-->
			@yield('body')
		<!-- END: Body-->
		@include('layout.footer')
        @include('layout.scripts.serviceScripts')
	</body>
</html>
