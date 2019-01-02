	<style type="text/css" media="screen">
		img.sliderShow{
			width: 267px;
			height: auto;
			object-fit: contain;
			object-position: center;
		}
	</style>
	<?php 
		$idcurrent = 0;
		foreach ($dataslider as $value) {
			if ($idcurrent < $value['Id']) {
				$idcurrent = $value['Id'];
			}
		}
	 ?>
	<!-- box add slider -->
	<div class="box box-info">
	<div class="box-header with-border">
	  <h3 class="box-title">Add banner slider</h3>
	  <div class="box-tools pull-right">
	    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	  </div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	  <div class="row">
	    <div class="col-md-6 col-md-offset-3">
	       <div class="box box-default">
            <div class="box-body">
            	<div class="form-control hidden">
            		<input type="hidden" name="" value="<?= $idcurrent; ?>" class="idcurrent">
            	</div>
              <div class="form-group">
                <label>Tilte Banner:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control bannerTitle" name="titleBanner" value="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
              	<label>Banner Image:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-file-o"></i>
                  </div>
                  <input type="file" class="form-control bannerImg" name="files[]" value="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-control2">
              	<button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	    </div>
	    <!-- /.col -->
	    <div class="col-md-6">
	      
	    </div>
	    <!-- /.col -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.box-body -->
	</div>
	<!-- end box slider -->
            <!-- table data info slider -->
	<div class="box">
            <div class="box-header">
              <h3 class="box-title text-center"><strong>LIST USERS DATA</strong></h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover table_slider">
                <tr>
                  <th>ID</th>
                  <th>Title Banner</th>
                  <th>Banner Image</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($dataslider as $value): ?>
                 <tr class="row_Oneslider">
	                  <td class="idShow"><?= $value['Id'] ?></td>
	                  <td class="titleShow"><?= $value['titleslider'] ?></td>
	                  <td class="td_avartar">
	                  	<input type="hidden" name="" value="<?= $value['sliderdata'] ?>" class="sliderHidden">
	                  	<div class="areaSlider"><img src="<?= $value['sliderdata'] ?>" alt="" class="img img-responsive sliderShow"></div>
	                  </td>
	                  <td class="buttonAction">
	                  	<a data-href="<?= $value['Id'] ?>" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>
	                  	<a data-href="<?= $value['Id'] ?>" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>
	                  </td>
                </tr>
                <tr class="row_editSlider hidden bg-info">
	                  <td><input type="hidden" name="" value="<?= $value['Id'] ?>" placeholder="" class="Idslider"></td>
	                  <td><input type="text" name="" value="<?= $value['titleslider'] ?>" placeholder="" class="newTitleslider"></td>
	                  <td><input type="file" name="files[]"  placeholder="" class="sliderUploadAgain"></td>
	                  <td><a href="" class="btn btn-success btn-block buttonSave"><i class="fa fa-save"></i></a></td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	<script>
		var linktemp = '<?= base_url(); ?>';
		var nameOfFile = '';
		var nameOfFile2 = '';
		var contentAdd = '';
		/*-------------------end process uploadImage-------------------------*/
      	$('.bannerImg').fileupload({
				url:linktemp + '/slidercontroller/uploadfiles',
				dataType : 'json',
		        done: function (e, data) {
		            $.each(data.result.files, function (index, file){
		               nameOfFile = file.url;
		            });
		        }
			});
      	/*-------------------end process uploadImage-------------------------*/
      	$('.sliderUploadAgain').fileupload({
				url:linktemp + '/slidercontroller/uploadfiles',
				dataType : 'json',
		        done: function (e, data) {
		            $.each(data.result.files, function (index, file){
		               nameOfFile2 = file.url;
		            });
		        }
			});
      	/* ----------------------------- process Edit slider -----------------------------  */
		$('body').on('click', '.buttonEdit', function(event) {
			event.preventDefault();
			nameOfFile2 = $(this).parent().prev().children('.sliderHidden').val();
			console.log(nameOfFile2);
			$(this).parent().parent().next().removeClass('hidden');
		});
		/* ----------------------------- process Update Info slider -----------------------------  */
		$('body').on('click', '.buttonSave', function(event) {
			event.preventDefault();
			var idEdit = $(this).parent().prev().prev().prev().children().val();
			var newTitleslider = $(this).parent().prev().prev().children().val();
			$(this).parent().parent().addClass('hidden');
			$(this).parent().parent().prev().show('slow', function() {
				$(this).css("background-color", "#d4edda");
				$(this).fadeToggle('slow');
				$(this).show('slow', function() {
					$(this).css("background", "none");
				});
			});
			$(this).parent().parent().prev().children('.titleShow').html(newTitleslider);
			$(this).parent().parent().prev().children('.td_avartar').children('div.areaSlider').html('<img src="'+nameOfFile2+'" alt="" class="img img-responsive sliderShow">');
			$.ajax({
				url: linktemp +'slidercontroller/updateSlider',
				type: 'POST',
				dataType: 'json',
				data: {
					idedit : idEdit,
					newtitleslider : newTitleslider,
					newbanner : nameOfFile2
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				
			});
		});
      	/* ----------------------------- process add slider -----------------------------  */
      	var countClick = 0;
		$('body').on('click', '.btn-submit', function(event) {
			event.preventDefault();
			countClick +=1 ;
			var titlebanner = $(this).parent().prev().prev().children().children('.bannerTitle').val();
			var idcurrent = $(this).parent().prev().prev().prev().children('.idcurrent').val();
			var idcurrent2 = Number(idcurrent) + countClick;
			$.ajax({
				url: linktemp +'/slidercontroller/InsertBanner',
				type: 'POST',
				dataType: 'json',
				data: {
					titlebanner: titlebanner,
					img_banner: nameOfFile
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				contentAdd = '<tr class="row_Oneslider">';
				contentAdd += '<td class="idShow">'+idcurrent2+'</td>';
				contentAdd += '<td class="titleShow">'+titlebanner+'</td>';
				contentAdd += '<td class="td_avartar">';
				contentAdd += '<input type="hidden" name="" value="'+nameOfFile+'" class="sliderHidden">';
				contentAdd += '<div class="areaSlider"><img src="'+nameOfFile+'" alt="" class="img img-responsive sliderShow"></div>';
				contentAdd += '</td>';
				contentAdd += '<td class="buttonAction">';
				contentAdd += '<a data-href="" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>';
				contentAdd += '<a data-href="'+idcurrent2+'" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>';
				contentAdd += '</td>';
				contentAdd += '</tr>';
				contentAdd += '<tr class="row_editSlider hidden bg-info">';
				contentAdd += '<td><input type="hidden" name="" value="'+idcurrent2+'" placeholder="" class="Idslider"></td>';
				contentAdd += '<td><input type="text" name="" value="'+titlebanner+'" placeholder="" class="newTitleslider"></td>';
				contentAdd += '<td><input type="file" name="files[]"  placeholder="" class="sliderUploadAgain" id="avartarUser"></td>';
				contentAdd += '<td><a href="" class="btn btn-success btn-block buttonSave"><i class="fa fa-save"></i></a></td>';
				contentAdd += '</tr>';
				$('.table_slider').append(contentAdd);
			});
			
		});

		/* ----------------------------- process delete slider -----------------------------  */
		$('body').on('click', '.buttonRemove', function(event) {
			event.preventDefault();
			var iddelete = $(this).data('href');
			var itemdelete = $(this).parent().parent();
			console.log(iddelete);
			$.ajax({
				url: linktemp +'/slidercontroller/deleteSlider/' + iddelete,
				type: 'POST',
				dataType: 'json'
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				itemdelete.css("background-color", "#f8d7da");
				itemdelete.fadeToggle('slow', function() {
					$(this).css("background-color", "##f8d7da");
				});
			});
			
		});
	</script>