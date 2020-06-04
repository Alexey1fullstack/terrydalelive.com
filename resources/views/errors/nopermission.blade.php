<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title> {{$setting->site_name}} | permission</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <!--begin::Page Custom Styles(used by this page) -->
        <link href="{{asset('public/assets/metronic/css/demo1/pages/general/error/error-3.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->




        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{asset('public/assets/metronic/css/demo1/style.bundle.css')}}" rel="stylesheet" type="text/css" />


		<!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{asset('public/assets/metronic/css/demo1/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/metronic/css/demo1/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/metronic/css/demo1/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/metronic/css/demo1/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v3" style="background-image: url({{asset('public/assets/metronic/media/error/bg3.jpg')}})">
				<div class="kt-error_container">
					<span class="kt-error_number">
						<h1>No Permission</h1>
					</span>
					<p class="kt-error_title kt-font-light">
						Please email to this address to get your permission.
                    </p>
                    <p class="kt-error_title kt-font-black">
                        Support Email: {{$setting->site_email}}
					</p>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->



	</body>
	@if(Auth::user()->permission == 1)
	<script>
		window.location.href = "admin";
	</script>
	@endif

	<!-- end::Body -->
</html>
