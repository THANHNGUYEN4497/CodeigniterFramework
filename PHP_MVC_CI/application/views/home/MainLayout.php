<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('library_CSS&JS/Libraries_CSS_2'); ?>
</head>
<style type="text/css" media="screen">
</style>
<body >
	<div class="wrapper">
		<?php $this->load->view('home/headerHomePage'); ?>

<!--  -----------------------------------area-content--------------------------------------  -->
		<div class="content-wrapper">
			<section class="content-header">
			</section> <!-- end_content_header -->
			<section class="content-homepage">
				<?php $this->load->view($linktemp,$sliderBannner,FALSE); ?>
			</section><!--  end_content -->
		</div> <!-- end_content_wrapper -->
<!--  -----------------------------------end area-content--------------------------------------  -->

		<?php $this->load->view('home/footerHomePage'); ?>
	</div> <!-- end_wrapper -->
	<?php $this->load->view('library_CSS&JS/libraries_JS2'); ?>
</body>
</html>
