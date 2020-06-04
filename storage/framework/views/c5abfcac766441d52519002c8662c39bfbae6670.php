<!DOCTYPE html>
<html lang="en">
	<head>
        <?php echo $__env->make('layout.head-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('page-css'); ?>
        <?php echo $__env->yieldContent('custom-css'); ?>
        <?php echo $__env->make('layout.header-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('custom-js'); ?>

	</head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        <!-- Begin :: Page -->
        <?php echo $__env->make('layout.head_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                
                <?php echo $__env->make('layout.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<?php echo $__env->make('layout.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo $__env->yieldContent('main-content'); ?>

                    <?php echo $__env->make('layout.page-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        <?php echo $__env->make('layout.global_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('page-js'); ?>
		<script>
			$(document).ready(function(){
				$('#main-loading').fadeOut();
			});
		</script>

	</body>
</html>
<?php /**PATH /home/remiu49263hb/public_html/resources/views/layout/master.blade.php ENDPATH**/ ?>