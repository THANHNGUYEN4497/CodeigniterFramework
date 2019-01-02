<header id="headerHome" class="">
    <nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#"><strong class="text-danger">VS</strong>PHONE <img src="<?= base_url() ?>/public/images/flagV.png" class="img_flagV" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		    
		    
	    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
		    <ul class="navbar-nav text-center">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Phone</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">LapTop</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">News Technology</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
	    </div>
	    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		    <ul class="navbar-nav text-center">
		      <li class="nav-item">
		        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><i class=" fa fa-user text-danger"></i> LogIn</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class=" fa fa-shopping-cart text-danger"></i> Carts</a>
		      </li>
		      </li>
		    </ul>
	    </div>
	</nav>
</header><!-- /header -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LabelLogin" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title" id="LabelLogin"><span class="text-danger">LOG</span>IN</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        	<fieldset class="form-group">
        		<label for="formGroupExampleInput" class="titleInput">UserName:</label>
        		<input type="text" class="form-control"  placeholder="UserName">
        	</fieldset>
        	<fieldset class="form-group">
        		<label for="formGroupExampleInput2" class="titleInput">Password:</label>
        		<input type="password" class="form-control" id="formGroupExampleInput0" placeholder="Password">
        	</fieldset>
        	<fieldset>
        		<label class="titleInput" style="font-size: 13px; letter-spacing: 0.5px;">
        			<input type="checkbox" name="" value=""> Remember me
        		</label>
        		<a href="" class="getPasswordAgain pull-right">forget your password ?</a>
        	</fieldset>
        	<fieldset class="form-group mt-3">
        		<button type="submit" class="btn btn-outline-danger btn-block pt-1 pb-1">SUBMIT</button>
        	</fieldset>
        </form>
      </div>
      <div class="modal-footer d-inline-block justify-content-center">
        <span class="mt-2" style="font-family: 'Anton', sans-serif; font-size: 13px;letter-spacing: 0.5px;">Do you have account? <a href="" class="getPasswordAgain" data-toggle="modal" data-target="#resgisterModal"> Resgister here!</a></span>
      </div>
    </div>
  </div>
</div>
<!-- ------------------------------------------ Resgister Modal ------------------------------------------ -->
<div class="modal fade" id="resgisterModal" tabindex="-1" role="dialog" aria-labelledby="LableRegsiter" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title" id="LableRegsiter"><span class="text-danger">RES</span>GISTER</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
        	<div class="row">
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput fullname">FullName:<strong class="text-danger"> *</strong></label>
        			<input type="text" class="form-control"  placeholder="Full Name">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput username">UserName:<strong class="text-danger"> *</strong></label>
        			<input type="text" class="form-control"  placeholder="User Name">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput2" class="titleInput password">Password:<strong class="text-danger"> *</strong></label>
        			<input type="password" class="form-control" id="formGroupExampleInput1" placeholder="Password">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput2" class="titleInput passwordconf">Password Confirm:<strong class="text-danger"> *</strong></label>
        			<input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password Confirm">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput birthday">Day of Birth:<strong class="text-danger"> *</strong></label>
        			<input type="text" class="form-control"  placeholder="Day of Birth">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput address">Address:<strong class="text-danger"> *</strong></label>
        			<input type="text" class="form-control"  placeholder="Address">
        		</fieldset>
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput phonenumber">PhoneNumber:<strong class="text-danger"> *</strong></label>
        			<input type="text" class="form-control"  placeholder="PhoneNumber">
        		</fieldset>
        		<fieldset class="col-6 form-group">
        			<label for="formGroupExampleInput" class="titleInput avartarFromHome">Avartar:</label>
        			<input type="file" name=""  class="form-control" value="" placeholder="">
        		</fieldset>
        		<fieldset class="col-12" class="gender-area">
        			<label class="titleInput"> Gender: <input type="radio" name="optradio" value="Male" checked> Male</label>
        			<label class="titleInput"><input type="radio" name="optradio" value="Female"> Female</label>
        		</fieldset>
                <fieldset class="form-group mt-3">
                    <button type="submit" class="btn btn-outline-danger btn-block pt-1 pb-1" id="resgisterUser">RESGISTER</button>
                </fieldset>
        	</div>
        </form>
      </div>
      <div class="modal-footer d-inline-block justify-content-center">
        <span class="mt-2" style="font-family: 'Anton', sans-serif; font-size: 13px;letter-spacing: 0.5px;">You have already account? <a href="" class="getPasswordAgain" data-toggle="modal" data-target="#loginModal"> Login here!</a></span>
      </div>
    </div>
  </div>
</div>
<script>
    $('body').on('click', '#resgisterUser', function(event) {
        event.preventDefault();
        var userName = $(this).parent().prev().children('.titleInput.fullname');
        console.log(userName);
    });
</script>