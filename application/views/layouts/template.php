<!DOCTYPE html>
<html>

<head>
	<title>
		<?php echo $title ?>
	</title>
	<link href='<?php echo base_url("assets/uploads/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />
	<!-- meta -->
	<?php require_once('_meta.php') ;?>

	<!-- css -->
	<?php require_once('_css.php') ;?>
</head>

<body>
	<!-- Loader starts-->
	<div class="loader-wrapper">
		<div class="theme-loader">
			<div class="loader-p"></div>
		</div>
	</div>
	<!-- Loader ends-->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- header -->
		<?php require_once('_header.php') ;?>
		<!-- content -->
		<div class="page-body-wrapper sidebar-icon">
			<!-- sidebar -->
			<?php require_once('_sidebar.php') ;?>
			<!-- Main content -->
			<div class="page-body">
				<?php echo $contents ;?>
			</div>
			<!-- footer -->
			<?php require_once('_footer.php') ;?>
		</div>

	</div>
	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
