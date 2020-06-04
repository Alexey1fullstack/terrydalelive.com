<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
    	<title><?php echo e($setting->site_name); ?> | Card system</title>
        <meta name="description" content="Real Estate Loans">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
        <link href="<?php echo e(asset('public/assets/metronic/css/demo1/pages/general/login/login-1.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')); ?>" rel="stylesheet" type="text/css" />

		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/select2/dist/css/select2.css')); ?>" rel="stylesheet" type="text/css" />

		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/sweetalert2/dist/sweetalert2.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/socicon/css/socicon.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/custom/vendors/line-awesome/css/line-awesome.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/custom/vendors/flaticon/flaticon.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/custom/vendors/flaticon2/flaticon.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/custom-css/loading.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo e(asset('public/assets/metronic/css/demo1/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<?php echo e(asset('public/assets/metronic/css/demo1/skins/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/css/demo1/skins/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/css/demo1/skins/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('public/assets/metronic/css/demo1/skins/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo e(asset('public/logo.ico')); ?>" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
		<!-- begin :: loading spinner -->
			<div id="main-loading">
				<div class="load_ctn" >
					<div class="m-loader m-loader--primary" style="width: 30px;display: block;"></div>
				</div>
			</div>
		<!-- end :: loading spinner -->
        <?php echo $__env->yieldContent('main-content'); ?>

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

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo e(asset('public/assets/metronic/vendors/general/jquery/dist/jquery.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('public/assets/metronic/vendors/general/sticky-js/dist/sticky.min.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('public/assets/metronic/vendors/general/jquery-form/dist/jquery.form.min.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('public/assets/metronic/vendors/general/jquery-validation/dist/jquery.validate.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('public/assets/metronic/vendors/general/jquery-validation/dist/additional-methods.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('public/assets/metronic/vendors/custom/js/vendors/jquery-validation.init.js')); ?>" type="text/javascript"></script>


		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo e(asset('public/assets/metronic/js/demo1/scripts.bundle.js')); ?>" type="text/javascript"></script>
		<script>
           $(document).ready(function(){
				$('#main-loading').fadeOut();
			});
        </script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<?php echo $__env->yieldContent('page-js'); ?>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
<?php /**PATH /home/remiu49263hb/public_html/resources/views/layout/auth.blade.php ENDPATH**/ ?>