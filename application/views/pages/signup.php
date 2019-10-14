

<div class="modal-content container">
        <div class= "modal-header" style="padding:35px 50px;">
               
        </div>

        <h1 class="text-center">Sign Up Account</h1>
      <div class="modal-body" style="padding:35px 50px;">
    
    <?php echo form_error('<div class="alert alert-danger">' , '</div>');?>


    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="validationServer05" placeholder="Zip" required>
      <div class="invalid-feedback">
        <?php echo form_error('email'); ?>
      </div>
    </div>
  </div>
      
      
<form method="POST" action="<?php echo site_url('jofcontroller/register');?>">

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputComName">Company Name</label>
       <input type="text" class="form-control" id="inputComName" name="companyName" placeholder="Company Name" value="<?php echo set_value('companyName');?>" >
       
        </div>
  <div class="form-group col-md-6">
     <label for="inputComAdd">Company Address</label>
        <input type="text" class="form-control" id="inputComAdd" name="companyAdd" placeholder="Company Address" value="<?php echo set_value('companyAdd');?>">
        </div>
          </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirst">First Name</label>
        <input type="text" class="form-control" id="inputFirst" name="firstName" placeholder="First Name" value="<?php echo set_value('firstName');?>">
          </div>
  <div class="form-group col-md-4">
    <label for="inputLast">Last Name</label>
      <input  type="text" id="inputLast" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo set_value('lastName');?>">
        </input>
          </div>
  <div class="form-group col-md-2">
    <label for="inputMI">Middle Name</label>
      <input type="text" class="form-control" id="inputMI" name="midInit" placeholder="Middle Name" value="<?php echo set_value('midInit');?>">
         </div>
           </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUseName">Username</label>
        <input type="text" class="form-control" id="inputUseName" name="username" placeholder="Username" value="<?php echo set_value('username');?>">
         </div>
  <div class="form-group col-md-6">
    <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail"   name="email" placeholder="Email" value="<?php echo set_value('email');?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
          </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAdd">Address</label>
        <input type="text" class="form-control" id="inpudAdd"  name="homeAdd" placeholder="Consignee Address" value="<?php echo set_value('homeAdd');?>">
          </div>
    <div class="form-group col-md-6">
      <label for="inputConInfo">Contact Information</label>
       <input type="inputConInfo" class="form-control" id="inputConInfo" name="contactInfo" placeholder="Contact Information" value="<?php echo set_value('contactInfo');?>">
         </div>
          </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPass">Password</label>
        <input type="password" class="form-control" id="inputPass" name="passWord" placeholder="Password">
          </div>
    <div class="form-group col-md-6">
      <label for="repeatPass">Repeat Password</label>
       <input type="password" class="form-control" id="repeatPass" name="passRepeat"placeholder="Repeat Password">
        </div>
          </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
        <input type="text" class="form-control" name="cityAdd" id="inputCity" value="<?php echo set_value('cityAdd');?>">
          </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState"  name="cityState" class="form-control">
        <option selected>Choose...</option>
        <option>Cebu</option>
         <option>Manila</option>
          <option>Leyte</option>
          <option>Davao</option>
           <option>Samar</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="zipCode" class="form-control" id="inputZip" value="<?php echo set_value('zipCode');?>">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck" style="margin-left:4%">
         Agreement of Terms and Conditions
      </label>
    </div>
  </div>
  <div class="text-center clearfix" >
  <a href="<?php echo base_url('jofcontroller/view/home')?>" class="btn btn-danger" role="button">Cancel</a>
  <button type="submit" name="signup" class="btn btn-danger">Sign up</button>
  </div>
  <br>
</form>
</div>
</div>
<br>