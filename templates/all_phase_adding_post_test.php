<?php

/**
 * TEMPLATE: DASHBAORDING ADDING ALL POST TEST
 */

// Check if ABSPATH is defined
if (!defined('ABSPATH')) {
	exit;
} else {

?>

<?php
// Define allowed HTML tags
$allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
$allowedTags .= '<li><ol><ul><span><div><br><ins><del>';

// Check if 'elm1' field is not empty
if ($_POST['elm1'] != '') {
	// Header for submitted content
	$sHeader = '<h1>Ah, content is king.</h1>';
	// Content with HTML tags stripped and allowed tags
	$sContent = strip_tags(stripslashes($_POST['elm1']), $allowedTags);
} else {
	// Default header when no content is submitted
	$sHeader = '<h1>Nothing submitted yet</h1>';
	// Default content with placeholder text and image
	$sContent = '<p>Start typing...</p>';
	$sContent .= '<p><img width="107" height="108" border="0" src="/mediawiki/images/badge.png"';
	$sContent .= 'alt="TinyMCE button"/>This rover has crossed over</p>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ADventure Dashboard</title>
	<!-- plugins:css -->
	<!-- CSS files for plugins -->
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/feather/feather.css'; ?>">
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/ti-icons/css/themify-icons.css'; ?> ">
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/css/vendor.bundle.base.css'; ?> ">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- CSS files for specific plugins -->
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css'; ?> ">
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/ti-icons/css/themify-icons.css'; ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/select.dataTables.min.css'; ?> ">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/css/vertical-layout-light/style.css'; ?>">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo plugin_dir_url(__FILE__) . '/dashboard/images/favicon.png'; ?> " />

	<!-- CKEditor library -->
	<script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>

	<!-- Dark theme for SweetAlert2 library -->
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

	<style media="screen">
		@media only screen and (max-width: 500px) {
			.mobiles {
				grid-template-columns: auto !important;
				width: 100% !important;
				gap: 10px !important;
			}

			.mobiles>.card {
				min-width: 100% !important;
			}
		}
	</style>
</head>

<body>
	<div class="container-scroller">
		<!-- Header -->
		<?php include('header.php'); ?>
		<!-- End Header -->

		<div class="container-fluid page-body-wrapper">
			<!-- Sidebar -->
			<?php include('sidebar.php'); ?>
			<!-- End Sidebar -->

			<!-- Main Content -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<!-- Content Header -->
									<?php echo $sHeader; ?>
									<!-- End Content Header -->
									<!-- Content -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<!-- Content Editor -->
													<form method="post">
														<textarea id="elm1" name="elm1" rows="15" cols="80">
															<?php echo $sContent; ?>
														</textarea>
														<br>
														<input type="submit" value="Submit">
													</form>
													<script>
														CKEDITOR.replace('elm1');
													</script>
													<!-- End Content Editor -->
												</div>
											</div>
										</div>
									</div>
									<!-- End Content -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer -->
				<?php include('footer.php'); ?>
				<!-- End Footer -->
			</div>
			<!-- End Main Content -->
		</div>
	</div>
	<!-- plugins:js -->
	<!-- JavaScript files for plugins -->
	<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/js/vendor.bundle.base.js'; ?>"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- JavaScript files for specific plugins -->
	<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/datatables.net/jquery.dataTables.js'; ?>"></script>
	<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js'; ?>"></script>
	<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/dataTables.select.min.js'; ?>"></script>
	<!-- End plugin js for this page -->
	<!-- Custom js for this page-->
	<script src="<?php echo plugin_dir_url(__FILE__) . '/dashboard/js/dashboard.js'; ?>"></script>
	<!-- End custom js for this page-->
	<!-- End custom js for this page-->

	<!-- SweetAlert2 library -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<!-- Custom script to handle form submission -->
	<script>
		// Submit form and show success message
		function submitForm() {
			Swal.fire({
				title: 'Success',
				text: 'Form submitted successfully!',
				icon: 'success',
				confirmButtonText: 'OK'
			});
		}
		document.querySelector('form').addEventListener('submit', function (e) {
			e.preventDefault();
			submitForm();
		});
	</script>
</body>

</html>

<?php } ?>
