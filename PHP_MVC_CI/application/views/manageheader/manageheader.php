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
		foreach ($header as $value) {
			if ($idcurrent < $value['Id']) {
				$idcurrent = $value['Id'];
			}
		}
	 ?>
	<!-- box add slider -->
	<div class="box box-info">
	<div class="box-header with-border">
	  <h3 class="box-title">Add Header</h3>
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
                <label>Tilte Header:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control categoryTitle" name="categoryTitle" value="">
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
              <h3 class="box-title text-center"><strong>LIST HEADER</strong></h3>
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
                  <th>Title Header</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                <?php foreach ($header as $value): ?>
                <tr class="row_edit">
                	<td><?= $value['Id'] ?></td>
                	<td class="newTitle"><?= $value['Title_header'] ?></td>
                	<td class="day"><?= date('d/m/Y', $value['created']) ?></td>
                	<td>
                		<a data-href="<?= $value['Id'] ?>" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>
	                  	<a data-href="<?= $value['Id'] ?>" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>
                	</td>
                </tr>
                <tr class="hidden row_update bg-info">
                	<td><input type="hidden" name="" value="<?= $value['Id'] ?>" placeholder="" class="Idcategorty"></td>
	                 <td><input type="text" name="" value="<?= $value['Title_header'] ?>" placeholder="" class="titleCategory"></td>
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
		/* ----------------------------- process Edit header -----------------------------  */
		$('body').on('click', '.buttonEdit', function(event) {
			$(this).parent().parent().next().removeClass('hidden');
		});
		/* ----------------------------- process update data header -----------------------------  */
		$('body').on('click', '.buttonSave', function(event) {
			var newtitleCat = $(this).parent().prev().prev().children('.titleCategory').val();
			var idUpdate = $(this).parent().prev().prev().prev().children('.Idcategorty').val();
			var day = $(this).parent().prev().children('.daycreated').val();
			$(this).parent().parent().addClass('hidden');
			$(this).parent().parent().prev().show('slow', function() {
				$(this).css("background-color", "#d4edda");
				$(this).fadeToggle('slow');
				$(this).show('slow', function() {
					$(this).css("background", "none");
				});
			});
			$(this).parent().parent().prev().children('.newTitle').html(newtitleCat);
			$.ajax({
				url: linktemp + 'ManageHeader/updateHeader/'+idUpdate,
				type: 'POST',
				dataType: 'json',
				data: {newtitle: newtitleCat},
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
		/* ----------------------------- process delete header -----------------------------  */
		$('body').on('click', '.buttonRemove', function(event) {
			var idDelete = $(this).data('href');
			var itemDelete1 = $(this).parent().parent();
			var itemDelete2 = $(this).parent().parent().next();
			$.ajax({
				url: linktemp + 'ManageHeader/deteteHeader/'+idDelete,
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
		/* ----------------------------- process add header -----------------------------  */
		$('body').on('click', '.btn-submit', function(event) {
			$count += 1;
			event.preventDefault();
			var titleCategory = $(this).parent().prev().children().children('.categoryTitle').val();
			var idcurrent2 = Number($(this).parent().prev().prev().children('.idcurrent1').val()) + $count;
			$.ajax({
				url: linktemp + 'ManageHeader/addHeader',
				type: 'POST',
				dataType: 'json',
				data: {titlecategory: titleCategory},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				var contentAdd = '<tr class="row_edit">';
				contentAdd +='<td>'+idcurrent2+'</td>';
				contentAdd +='<td class="newTitle">'+titleCategory+'</td>';
				contentAdd +='<td><span class="label label-warning">Loading...</span></td>';
				contentAdd +='<td>';
				contentAdd +='<a data-href="'+idcurrent2+'" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>';
				contentAdd +='<a data-href="'+idcurrent2+'" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>';
				contentAdd +='</td>';
				contentAdd +='<tr class="hidden row_update">';
				contentAdd +='<td><input type="hidden" name="" value="'+idcurrent2+'" placeholder="" class="Idcategorty"></td>';
				contentAdd +='<td><input type="text" name="" value="'+titleCategory+'" placeholder="" class="titleCategory"></td>';
				contentAdd +='<td><input type="text" name=""  placeholder="" class="daycreated" disabled></td>';
				contentAdd +='<td>';
				contentAdd +='<a data-href="" class="btn btn-success buttonSave"><i class="fa fa-save"></i></a>';
				contentAdd +='</td>';
				contentAdd +='</tr>';
				$('.table_category').append(contentAdd);
			});
			
		});
	</script>