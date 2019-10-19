


<div class="container">
	
    <div class="modal-content ">
        <div class= "modal-header" style="padding:35px 50px;">      
        </div>


         <h1 class="text-center">Login Account</h1>
           
<!-- 
               
                   <?php if ($this->session->flashdata('Error')) {?>
                <div class="alert alert-danger col-md-11" role="alert">
                  <<?php echo $this->session->flashdata('Error'); ?>
              </div>
              <?php  } ?> -->

             <?php if($this->session->flashdata('Error')){ ?>
                  <div class="alert alert-danger mx-auto col-md-8 text-center">
                  <?php echo $this->session->flashdata('Error') ? $this->session->flashdata('Error') : '' ;?>
                  </div>
              <?php  }  ?>
               
            
        <div class="modal-body col-md-11" style="padding:30px 50px;">
          <form role="form" method="POST" action="<?php echo site_url('jofcontroller/accounts');?>">
                
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control <?php echo form_error('userLogName') ? 'is-invalid' : '';?> " id="usrname" name="userLogName" value="<?php echo isset($userLogName) ? $userLogName : '' ?>" placeholder="Username">
              <div class="invalid-feedback" ><?php echo form_error('userLogName') ? form_error('userLogName') : '';?></div>
            </div>
            <label form="usrname"><span class="glyphicon glyphicon-eye-open"></span> Password</label></br>            
              <input type="password" class="form-control <?php echo form_error('passLogWord') ? 'is-invalid' : '';?>" placeholder="password" name="passLogWord" id="example">
              <div class="invalid-feedback" ><?php echo form_error('passLogWord') ? form_error('passLogWord') : '';?></div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <div class="text-center" style="height: 50px;">
              <a href="<?php echo base_url('jofcontroller/view/home')?>" class="btn btn-danger" role="button">Back</a>
              <button type="submit" class="btn btn-danger" name="signIn" role="button">Login</button>
              </div>
 
          </form>
  
       
          <p style= "padding: 1px 50px">Not a member yet? <a href="<?php echo base_url('jofcontroller/view/signup')?>">Sign Up</a></p>

</div>   
</div>
</div>
<br>