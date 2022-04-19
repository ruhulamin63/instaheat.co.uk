<!DOCTYPE html>
<html lang="en">

    @include('layout.head.boilers-logic-30-head')
	@include('layout.topBar.customerTopBar')
	<body>
		<!-- BEGIN: Body-->
		@yield('body')
		<!-- END: Body-->
		@include('layout.footer')
		@include('layout.scripts.customerScripts')
	</body>
</html>
