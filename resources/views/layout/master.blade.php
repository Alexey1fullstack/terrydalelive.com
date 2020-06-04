<!DOCTYPE html>
<html lang="en">
	<head>
        @include('layout.head-top')
        @yield('page-css')
        @yield('custom-css')
        @include('layout.header-bottom')
        @yield('custom-js')

	</head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        <!-- Begin :: Page -->
        @include('layout.head_mobile')

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                {{-- Begin :: aside --}}
                @include('layout.aside')
                {{-- End :: aside --}}
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					@include('layout.page-header')

                    @yield('main-content')

                    @include('layout.page-footer')

				</div>
			</div>
		</div>

        <!-- End :: Page -->

		<!-- Section::Quick Panel -->

		<!-- Begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- End::Scrolltop -->

		<!-- Section::Sticky Toolbar -->
        @include('layout.global_js')
        @yield('page-js')
		<script>
			$(document).ready(function(){
				$('#main-loading').fadeOut();
			});
		</script>

	</body>
</html>
