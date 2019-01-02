<section class="slider_Ad">
	<div class="row">
		<div class="col-8 d-block">
			<div id="slider_banner" class="owl-carousel owl-theme">
				<?php foreach ($sliderBannner as $value): ?>
					<div class="item_banner">
					<img src="<?= $value['sliderdata'] ?>" alt="">
				</div>
				<?php endforeach ?>
			</div>
		</div> <!-- end_slider_banner -->
		<div class="col-4 area-tab">
	        <ul class="nav nav-tabs" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" href="#sales" role="tab" data-toggle="tab">Sales</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#News" role="tab" data-toggle="tab">News</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#contact" role="tab" data-toggle="tab">Contact Us</a>
			  </li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content mt-1">
			<div role="tabpanel" class="tab-pane fade in active" id="sales">
				  <ul class="list-unstyled d-inline-block">
				     <li><img src="<?= base_url() ?>public/images/sale_img_1.png" alt="" class="img img-fluid"></li>
				     <li><img src="<?= base_url() ?>public/images/sale_img_2.png" alt="" class="img img-fluid"></li>
				  </ul>
			</div>
			  <div role="tabpanel" class="tab-pane fade" id="News">bbb</div>
			  <div role="tabpanel" class="tab-pane fade" id="contact">ccc</div>
			</div>
		</div> <!-- end_tab_info -->
	</div>
</section>
<section class="area-product mt-2">
	<div class="row">
		<span class="alert-danger w-20 text-center m-auto title_sale">Best Sales &nbsp;<i class="fa fa-shopping-cart"></i></span>
		<div class="col-12 mt-2">
			<div class="row">
				<div id="productIntro" class="owl-carousel">
				<div class="item-product  col-2">
					<a href="#" class="box-item-product">
						<div class="card card-item-info" style="width: 18rem;">
						  <img class="card-img-top m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-7-plus-128gb-hh-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						  	<h4 class="title_product">Iphone 7 Plus 64GB</h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <ul class="list-unstyled d-flex ">
						    	<li class="list-inline-item"><a href="" class="btn  btn-success"><i class="fa fa-thumbs-o-up"></i></a></li>
						    	<li class="list-inline-item"><a href="" class="btn  btn-primary"><i class="fa fa-shopping-cart"></i></a></li>
						    </ul>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-product  col-2">
					<a href="#" class="box-item-product">
						<div class="card card-item-info" style="width: 18rem;">
						  <img class="card-img-top m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-8-plus-hh-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_new">New Launch</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB</h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <ul class="list-unstyled d-flex ">
						    	<li class="list-inline-item"><a href="" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i></a></li>
						    	<li class="list-inline-item"><a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a></li>
						    </ul>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-product  col-2">
					<a href="#" class="box-item-product">
						<div class="card card-item-info" style="width: 18rem;">
						  <img class="card-img-top m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-512gb-gold-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_credit">Credit 0%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB</h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  	<ul class="list-unstyled d-flex ">
						    	<li class="list-inline-item"><a href="" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i></a></li>
						    	<li class="list-inline-item"><a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a></li>
						    </ul>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-product col-2">
					<a href="#" class="box-item-product">
						<div class="card card-item-info" style="width: 18rem;">
						  <img class="card-img-top m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-7-plus-128gb-hh-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB</h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <ul class="list-unstyled d-flex ">
						    	<li class="list-inline-item"><a href="" class="btn  btn-success"><i class="fa fa-thumbs-o-up"></i></a></li>
						    	<li class="list-inline-item"><a href="" class="btn  btn-primary"><i class="fa fa-shopping-cart"></i></a></li>
						    </ul>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-product col-2">
					<a href="#" class="box-item-product">
						<div class="card card-item-info" style="width: 18rem;">
						  <img class="card-img-top m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-gray-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB </h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <ul class="list-unstyled d-flex ">
						    	<li class="list-inline-item"><a href="" class="btn  btn-success"><i class="fa fa-thumbs-o-up"></i></a></li>
						    	<li class="list-inline-item"><a href="" class="btn  btn-primary"><i class="fa fa-shopping-cart"></i></a></li>
						    </ul>
						  </div>
						</div>
					</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="area-pop-product mt-3">
		<div class="row">
		<div class="item-phone col-6 col-md-4">
			<a href="" class="box-item-phone">
				<div class="card card-item-info">
				  <img class="card-img-phone m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-gray-600x600.jpg" alt="Card image cap">
				  <div class="card-body ">
				  	<label class="label-info status_sale">sale 20%</label>
				    <h4 class="title_product">Iphone 7 Plus 64GB </h4>
				    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
				    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-8">
			<div class="row">
				<div class="item-phone col-12 col-md-4">
					<a href="" class="box-item-phone">
						<div class="card card-item-info">
						  <img class="card-img-phone m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-gray-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB </h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-phone col-12 col-md-4">
					<a href="" class="box-item-phone">
						<div class="card card-item-info">
						  <img class="card-img-phone m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-gray-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB </h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
					</a>
				</div>
				<div class="item-phone col-12 col-md-4">
					<a href="" class="box-item-phone">
						<div class="card card-item-info">
						  <img class="card-img-phone m-md-auto" src="<?= base_url() ?>public/images/Iphone/iphone-xs-max-gray-600x600.jpg" alt="Card image cap">
						  <div class="card-body ">
						  	<label class="label-info status_sale">sale 20%</label>
						    <h4 class="title_product">Iphone 7 Plus 64GB </h4>
						    <h3 class="title_price"><i class="fa fa-dollar"></i>&nbsp;2000</h3>
						    <p class="content_product">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>