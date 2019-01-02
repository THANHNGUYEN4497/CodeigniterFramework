      <style type="text/css" media="screen">
      	img {
      		width: 40px;
      		height: 40px;
      		overflow: hidden;
      		object-fit: cover;
      		object-position: center;
      		border: 0.3px solid #333;
      	}
      	input[type=file] {
      		width: 100%;
      		position: static;
      	}
      </style>
      <div class="row">
        <div class="col-xs-12">
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
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Address</th>
                  <th>Phonenumber</th>
                  <th>Birthday</th>
				  <th>Gender</th>
				  <th>Avartar</th>
				  <th>Action</th>
                </tr>
                <?php foreach ($data_users as $value): ?>
                 <tr class="row_OneUser">
	                  <td class="idShow"><?= $value['Id'] ?></td>
	                  <td class="nameShow"><?= $value['name'] ?></td>
	                  <td class="addressShow"><?= $value['address'] ?></td>
	                  <td class="phoneShow"><?= $value['phone'] ?></td>
	                  <td class="birthShow"><?= $value['birthday'] ?></td>
	                  <td class="genderShow"><?= $value['gender'] ?></td>
	                  <td class="td_avartar">
	                  	<input type="hidden" name="" value="<?= $value['avatar'] ?>" class="avartarHidden">
	                  	<div class="areaAvartar"><img src="<?= $value['avatar'] ?>" alt="" class="img img-circle avartarShow"></div>
	                  </td>
	                  <td class="buttonAction">
	                  	<a data-href="" class="btn btn-info buttonEdit"><i class="fa fa-pencil"></i></a>
	                  	<a data-href="<?= $value['Id'] ?>" class="btn btn-danger buttonRemove"><i class="fa fa-remove"></i></a>
	                  </td>
                </tr>
                <tr class="row_editUser hidden bg-info">
	                  <td><input type="hidden" name="" value="<?= $value['Id'] ?>" placeholder="" class="idUser"></td>
	                  <td><input type="text" name="" value="<?= $value['name'] ?>" placeholder="" class="nameUser"></td>
	                  <td><input type="text" name="" value="<?= $value['address'] ?>" placeholder="" class="addressUser"></td>
	                  <td><input type="text" name="" value="<?= $value['phone'] ?>" placeholder="" class="phoneUser"></td>
	                  <td><input type="text" name="" value="<?= $value['birthday'] ?>" placeholder="" class="birthUser"></td>
	                  <td><input type="text" name="" value="<?= $value['gender'] ?>" placeholder="" class="genderUser"></td>
	                  <td><input type="file" name="files[]"  placeholder="" class="avartarUserUpload" id="avartarUser"></td>
	                  <td><a href="" class="btn btn-success btn-block buttonSave"><i class="fa fa-save"></i></a></td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  <script type="text/javascript">
  		var linkTemp = '<?php echo base_url(); ?>'
      	var nameOfFile = '';
      	/*-------------------begin process edit user-------------------------*/
		$('body').on('click', '.buttonEdit', function(event) {
			nameOfFile = $(this).parent().parent().children().children('.avartarHidden').val();
			event.preventDefault();
			console.log(nameOfFile);
			//$(this).parent().parent().addClass('hidden');
			$(this).parent().parent().next().removeClass('hidden');
		});
		/*-------------------end process edit user-------------------------*/
      	$('.avartarUserUpload').fileupload({
				url:linkTemp + '/AdminController/uploadfiles',
				dataType : 'json',
		        done: function (e, data) {
		            $.each(data.result.files, function (index, file){
		               nameOfFile = file.url;
		               console.log(nameOfFile);
		            });
		        }
			});
        /*-------------------begin process Update Info user-------------------------*/
        $('body').on('click', '.buttonSave', function(event){
        	event.preventDefault();
        	var linkUpdate = linkTemp+'AdminController/UpdateInfoUser';
        	id = $(this).parent().parent().children().children('.idUser').val();
        	fullname = $(this).parent().parent().children().children('.nameUser').val();
        	address = $(this).parent().parent().children().children('.addressUser').val();
        	phonenumber = $(this).parent().parent().children().children('.phoneUser').val();
        	birthday = $(this).parent().parent().children().children('.birthUser').val();
        	gender = $(this).parent().parent().children().children('.genderUser').val();
        	avartaruser = nameOfFile;
        	console.log(avartaruser);
        	$(this).parent().parent().addClass('hidden');
          $(this).parent().parent().prev().show('slow', function() {
          $(this).css("background-color", "#d4edda");
          $(this).fadeToggle('slow');
          $(this).show('slow', function() {
            $(this).css("background", "none");
          });
        });
        	$(this).parent().parent().prev().children('.nameShow').html(fullname);
        	$(this).parent().parent().prev().children('.addressShow').html(address);
        	$(this).parent().parent().prev().children('.phoneShow').html(phonenumber);
        	$(this).parent().parent().prev().children('.birthShow').html(birthday);
        	$(this).parent().parent().prev().children('.genderShow').html(gender);
        	$(this).parent().parent().prev().children('.td_avartar').children('div.areaAvartar').html('<img src="'+avartaruser+'" alt="" class="img img-circle">');
        	$.ajax({
        		url: linkUpdate,
        		type: 'POST',
        		dataType: 'json',
        		data: {
        			Id: id,
        			Fullname: fullname,
        			Address: address,
        			Phonenumber: phonenumber,
        			Birthday: birthday,
        			Gender: gender,
        			avartar: avartaruser
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
        	
        })
		/*-------------------end process Update Info user-------------------------*/

  		/*-------------------begin process delete user-------------------------*/
  		$('body').on('click', '.buttonRemove', function(event) {
  			event.preventDefault();
  			console.log('entered');
  			Iddelete = $(this).data('href');
  			var row_OneUser_delete = $(this).parent().parent();
      	    var linkDelete = linkTemp+'AdminController/DeleteUser/'+Iddelete;
      	    $.ajax({
      	    	url: linkDelete,
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
      	    	row_OneUser_delete.css("background-color", "#f8d7da");
              row_OneUser_delete.fadeToggle('slow', function() {
                $(this).css("background-color", "#f8d7da");
              });
      	    });
  		})
  		/*-------------------end process delete user-------------------------*/
  </script>

