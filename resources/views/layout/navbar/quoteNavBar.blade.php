<!DOCTYPE html>
<html lang="en">

    @include('layout.head.quoteHead')
	@include('layout.topBar.customerTopBar')
	<body>
		<!-- BEGIN: Body-->
			@yield('body')
		<!-- END: Body-->
		@include('layout.footer')
        @include('layout.scripts.quoteScript')
	</body>
</html>