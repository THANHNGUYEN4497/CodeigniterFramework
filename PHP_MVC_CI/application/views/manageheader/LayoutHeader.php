<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('library_CSS&JS/Libraries_CSS'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/headerAdmin'); ?>

<!--  -----------------------------------area-content--------------------------------------  -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
			        Page Header
			        <small>Optional description</small>
			      </h1>
			      <ol class="breadcrumb">
			        <li><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>
			        <li class="active">List User</li>
			      </ol>
			</section> <!-- end_content_header -->
			<section class="content container-fluid">
				<?php $this->load->view($linktemp,$header,FALSE); ?>
			</section><!--  end_content -->
		</div> <!-- end_content_wrapper -->
<!--  -----------------------------------end area-content--------------------------------------  -->

		<?php $this->load->view('admin/footerAdmin'); ?>
	</div> <!-- end_wrapper -->
	<?php $this->load->view('library_CSS&JS/libraries_JS'); ?>
</body>
</html>
