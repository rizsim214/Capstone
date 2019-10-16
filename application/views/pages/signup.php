

<div class="modal-content container">
        <div class= "modal-header" style="padding:35px 50px;">
               
        </div>

        <h1 class="text-center">Sign Up Account</h1>
      <div class="modal-body" style="padding:40px 50px;">
    
      
<form method="POST" action="<?php echo site_url('jofcontroller/register');?>">


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputComName">Company Name</label>
       <input type="text" class="form-control" id="inputComName" name="companyName" placeholder="Company Name">
        </div>
  <div class="form-group col-md-6">
     <label for="inputComAdd">Company Address</label>
        <input type="text" class="form-control" id="inputComAdd" name="companyAdd" placeholder="Company Address">
        </div>
          </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFirst">First Name</label>
        <input type="text" class="form-control" id="inputFirst" name="firstName" placeholder="First Name">
          </div>
  <div class="form-group col-md-4">
    <label for="inputLast">Last Name</label>
      <input  type="text" id="inputLast" class="form-control" name="lastName" placeholder="Last Name">
        </input>
          </div>
  <div class="form-group col-md-2">
    <label for="inputMI">Middle Name</label>
      <input type="text" class="form-control" id="inputMI" name="midInit" placeholder="Middle Name">
         </div>
           </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUseName">Username</label>
        <input type="text" class="form-control" id="inputUseName" name="username" placeholder="Username">
         </div>
  <div class="form-group col-md-6">
    <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail"  name="email" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
          </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAdd">Address</label>
        <input type="text" class="form-control" id="inpudAdd"  name="homeAdd" placeholder="Consignee Address">
          </div>
    <div class="form-group col-md-6">
      <label for="inputConInfo">Contact Information</label>
       <input type="inputConInfo" class="form-control" id="inputConInfo" name="contactInfo" placeholder="Contact Information">
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
        <input type="text" class="form-control" name="cityAdd" id="inputCity">
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
      <input type="text" name="zipCode" class="form-control" id="inputZip">
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
  <button type="submit" name="submit" class="btn btn-danger">Sign in</button>
  </div>
</form>
</div>
</div>
<br>