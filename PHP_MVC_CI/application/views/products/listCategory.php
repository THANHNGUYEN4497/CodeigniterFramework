	<style type="text/css" media="screen">
		img.sliderShow{
			width: 267px;
			height: auto;
			object-fit: contain;
			object-position: center;
		}
		span.label{
			font-size: 13px !important;
		}
	</style>
	<?php 
		$idcurrent = 0;
		foreach ($category as $value) {
			if ($idcurrent < $value['Id']) {
				$idcurrent = $value['Id'];
			}
		}
	 ?>
	<!-- box add slider -->
	<div class="box box-info">
	<div class="box-header with-border">
	  <h3 class="box-title">Add Category</h3>
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
            <div class="form-group hidden">
                  <input type="text" class="idcurrent1" name="categoryTitle" value="<?php echo $idcurrent; ?>">
            </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Tilte Category:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control categoryTitle" name="categoryTitle" value="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group --> 
              <div class="form-group">
                <label>Belong to Header:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-location-arrow"></i>
                  </div>
                  <select name="" class="form-control area-select-id" id="id_value">
                  	<?php foreach ($dataheader as $value): ?>
                  		<option value="<?= $value['Id']; ?>" class="id_header" data-title="<?= $value['Title_header'] ?>">
                  			<span class="title_header"><?= $value['Title_header']; ?></span>
                  		</option>
                  	<?php endforeach ?>
                  </select>
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
              <h3 class="box-title text-center"><strong>LIST CATEGORY</strong></h3>
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
              <table class="table table-hover table_category">
                <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Title Header</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($category as $value): ?>
                <tr class="row_edit">
                	<td><?= $value['Id'] ?></td>
                	<td class="newTitle"><?= $value['title_category'] ?></td>
                	<td class="newTitleHeader">
                		<span class="label label-warning">
                			<?php foreach ($dataheader as $value2): ?>
                			<?php if ($value['parent_id'] == $value2['Id']):
                				{echo $value2['Title_header'];}
                			 ?>
                			<?php endif ?>
                		<?php endforeach ?>
                		</span>
                	</td>
                	<td class="day"><?= date('d/m/Y', $value['created']) ?></td>
                	<td>
                		<a data-href="<?= $value['Id'] ?>" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>
	                  	<a data-href="<?= $value['Id'] ?>" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>
                	</td>
                </tr>
                <tr class="hidden row_update bg-info">
                	<td><input type="hidden" name="" value="<?= $value['Id'] ?>" placeholder="" class="Idcategorty"></td>
	                 <td><input type="text" name="" value="<?= $value['title_category'] ?>" placeholder="" class="titleCategory"></td>
	                 <td>
	                 <select class="chooseNew_parent_id">
	                 		<?php foreach ($dataheader as $value3): ?>
	                 			<option value="<?= $value3['Id'] ?>" <?php if ($value['parent_id'] == $value3['Id']):{echo 'selected';}?>
	                 			<?php endif; ?> data-newTitle="<?= $value3['Title_header'] ?>">
	                 				<span><?= $value3['Title_header'] ?></span>
	                 			</option>
	                 		<?php endforeach ?>
	                 </select>
	             	</td>
	                 <td><input type="text" name="" value="<?= date('d/m/Y', $value['created']) ?>" placeholder="" class="daycreated" disabled></td>
                	<td>
                		<a data-href="" class="btn btn-success buttonSave"><i class="fa fa-save"></i></a>
                	</td>
                </tr>
                <?php endforeach ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	<script>
		var linktemp = '<?= base_url() ?>';
		$count = 0;
		/* ----------------------------- process Edit category -----------------------------  */
		$('body').on('click', '.buttonEdit', function(event) {
			$(this).parent().parent().next().removeClass('hidden');
		});
		/* ----------------------------- process update data category -----------------------------  */
		$('body').on('click', '.buttonSave', function(event) {
			var newtitleCat = $(this).parent().prev().prev().prev().children('.titleCategory').val();
			var newParent_id = $(this).parent().prev().prev().children('.chooseNew_parent_id').children('option:selected').val();
			var newTitle_header = $(this).parent().prev().prev().children('.chooseNew_parent_id').children('option:selected').attr('data-newTitle');
			console.log(newParent_id);
			console.log(newTitle_header);
			var idUpdate = $(this).parent().prev().prev().prev().prev().children('.Idcategorty').val();
			$(this).parent().parent().addClass('hidden');
			$(this).parent().parent().prev().show('slow', function() {
				$(this).css("background-color", "#d4edda");
				$(this).fadeToggle('slow');
				$(this).show('slow', function() {
					$(this).css("background", "none");
				});
			});
			$(this).parent().parent().prev().children('.newTitle').html(newtitleCat);
			$(this).parent().parent().prev().children('.newTitleHeader').children().html(newTitle_header);
			$.ajax({
				url: linktemp + 'product_category_controller/updateCategory/'+idUpdate,
				type: 'POST',
				dataType: 'json',
				data: {
					newtitle: newtitleCat,
					newParent_id2: newParent_id
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
		/* ----------------------------- process delete category -----------------------------  */
		$('body').on('click', '.buttonRemove', function(event) {
			var idDelete = $(this).data('href');
			var itemDelete1 = $(this).parent().parent();
			var itemDelete2 = $(this).parent().parent().next();
			$.ajax({
				url: linktemp + 'product_category_controller/deteteCategory/'+idDelete,
				type: 'POST',
				dataType: 'json',
				data: {iddelete: idDelete},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				itemDelete1.css("background-color", "#f8d7da");
				itemDelete1.fadeToggle('slow', function() {
					$(this).css("background-color", "##f8d7da");
				});
				itemDelete2.remove();
			});
			
		});
		
		/* ----------------------------- process add category -----------------------------  */
		$('body').on('click', '.btn-submit', function(event) {
			$count += 1;
			event.preventDefault();
			var id_parent = $(this).parent().prev().children('.input-group').children('.area-select-id').children('option:selected').val();
			var newTitleHeader2 = $(this).parent().prev().children('.input-group').children('.area-select-id').children('option:selected').data('title');
			var titleCategory = $(this).parent().prev().prev().children().children('.categoryTitle').val();
			var idcurrent2 = Number($(this).parent().prev().prev().prev().children('.idcurrent1').val()) + $count;
			$.ajax({
				url: linktemp + 'product_category_controller/addCategory',
				type: 'POST',
				dataType: 'json',
				data: {
					id_parent2 : id_parent,
					titlecategory: titleCategory
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
				var contentAdd = '<tr class="row_edit bg-info">';
				contentAdd +='<td>'+idcurrent2+'</td>';
				contentAdd +='<td class="newTitle">'+titleCategory+'</td>';
				contentAdd +='<td class="newTitleHeader">';
				contentAdd += '<span class="label label-warning">'+newTitleHeader2;
				contentAdd += '</span>';
				contentAdd +='</td>';
				contentAdd +='<td><span class="label label-warning">Loading...</span></td>';
				contentAdd +='<td>';
				contentAdd +='<a data-href="'+idcurrent2+'" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>';
				contentAdd +='<a data-href="'+idcurrent2+'" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>';
				contentAdd +='</td>';
				contentAdd +='<tr class="hidden row_update">';
				contentAdd +='<td><input type="hidden" name="" value="'+idcurrent2+'" placeholder="" class="Idcategorty"></td>';
				contentAdd +='<td><input type="text" name="" value="'+titleCategory+'" placeholder="" class="titleCategory"></td>';
				contentAdd +='<td>';
				contentAdd +='<select class="chooseNew_parent_id">';
				contentAdd +='<?php foreach ($dataheader as $value3): ?>';
				contentAdd +='<option value="<?= $value3['Id'] ?>" <?php if ($value['parent_id'] == $value3['Id']):{echo 'selected';}?> <?php endif; ?>  data-newTitle="<?= $value3['Title_header'] ?>"> ';
				contentAdd += '<span><?= $value3['Title_header'] ?></span>'
				contentAdd += '</option>';
				contentAdd +='<?php endforeach ?>';
				contentAdd +='</select>';
				contentAdd +='</td>';
				contentAdd +='<td><input type="text" name=""  placeholder="" class="daycreated" disabled></td>';
				contentAdd +='<td>';
				contentAdd +='<a data-href="" class="btn btn-success buttonSave"><i class="fa fa-save"></i></a>';
				contentAdd +='</td>';
				contentAdd +='</tr>';
				$('.table_category').append(contentAdd);
			});
			
		});
		
	</script>
<!-- 	function getvalueId (){
		var selected = document.getElementById("id_value").value;
		var selected2 = document.getElementsByClassName("title_hide").value;
		console.log(selected);
		console.log(selected2);
	} -->