<div class="main">
	

<div class="modal-content container" style="margin-top: 20px;">
        <div class= "modal-header" style="padding:35px 50px;">
               
        </div>

        <h1 class="text-center">Add Employee Account</h1>
      <div class="modal-body" style="padding:40px 50px;">
    
      
<form method="POST" action="<?php echo site_url('jofcontroller/register');?>">


              
                <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputFirst">First Name</label>
                          <input type="text" class="form-control <?php echo form_error('firstName') ? 'is-invalid' : '';?>" id="inputFirst" name="firstName"  value="<?php echo isset($firstName) ? $firstName : '' ?>" placeholder="First Name">
                          <div class="invalid-feedback" ><?php echo form_error('firstName') ? form_error('firstName') : '';?></div>
                </div>
                    <div class="form-group col-md-4">
                      <label for="inputLast">Last Name</label>
                        <input  type="text" id="inputLast" class="form-control <?php echo form_error('lastName') ? 'is-invalid' : '';?>" name="lastName" value="<?php echo isset($lastName) ? $lastName : '' ?>" placeholder="Last Name">
                      <div class="invalid-feedback" ><?php echo form_error('lastName') ? form_error('lastName') : '';?></div>
                       </div>
                    <div class="form-group col-md-2">
                      <label for="inputMI">Middle Name</label>
                        <input type="text" class="form-control <?php echo form_error('midInit') ? 'is-invalid' : '';?>" id="inputMI" name="midInit" value="<?php echo isset($midInit) ? $midInit : '' ?>" placeholder="Middle Name">
                        <div class="invalid-feedback" ><?php echo form_error('midInit') ? form_error('midInit') : '';?></div>
                           </div>
                             </div>
                 <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputUseName">Username</label>
                          <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid' : '';?>" id="inputUseName" name="username" value="<?php echo isset($username) ? $username : '' ?>" placeholder="Username">
                           <div class="invalid-feedback" ><?php echo form_error('username') ? form_error('username') : '';?></div>
                       </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                          <input type="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '';?>" id="inputEmail"  name="email" value="<?php echo isset($email) ? $email : '' ?>" placeholder="Email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                           <div class="invalid-feedback" ><?php echo form_error('email') ? form_error('email') : '';?></div>
                      </div>
                  </div>

                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputAdd">Address</label>
                          <input type="text" class="form-control <?php echo form_error('homeAdd') ? 'is-invalid' : '';?>" id="inpudAdd"  name="homeAdd" value="<?php echo isset($homeAdd) ? $homeAdd : '' ?>" placeholder="Consignee Address">
                            <div class="invalid-feedback" ><?php echo form_error('homeAdd') ? form_error('homeAdd') : '';?></div>
                            </div>
                      <div class="form-group col-md-3">
                        <label for="inputConInfo">Contact Information</label>
                         <input type="inputConInfo" class="form-control <?php echo form_error('contactInfo') ? 'is-invalid' : '';?>" id="inputConInfo" name="contactInfo" value="<?php echo isset($contactInfo) ? $contactInfo : '' ?>" placeholder="Contact Information">
                           <div class="invalid-feedback" ><?php echo form_error('contactInfo') ? form_error('contactInfo') : '';?></div>
                           </div>

                        <div class="form-group col-md-3">
                        <label for="inputConInfo">User Role</label>
                          <select id="inputState"  name="cityState" value="<?php echo isset($cityState) ? $cityState : '' ?>" class="form-control <?php echo form_error('cityState') ? 'is-invalid' : '';?>">
                          <option selected>Choose Role</option>
                          <option>Admin</option>
                           <option>Broker</option>
                            <option>Accounting</option>
                       	  </select>
                         </div>
                     </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPass">Password</label>
                          <input type="password" class="form-control <?php echo form_error('passWord') ? 'is-invalid' : '';?>" id="inputPass" name="passWord" placeholder="Password">
                            <div class="invalid-feedback" ><?php echo form_error('passWord') ? form_error('passWord') : '';?></div>
                            </div>
                      <div class="form-group col-md-6">
                        <label for="repeatPass">Repeat Password</label>
                         <input type="password" class="form-control <?php echo form_error('passRepeat') ? 'is-invalid' : '';?>" id="repeatPass" name="passRepeat" placeholder="Repeat Password">
                         <div class="invalid-feedback" ><?php echo form_error('passRepeat') ? form_error('passRepeat') : '';?></div>
                          </div>
                            </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                          <input type="text" class="form-control <?php echo form_error('cityAdd') ? 'is-invalid' : '';?>" name="cityAdd" value="<?php echo isset($cityAdd) ? $cityAdd : '' ?>" id="inputCity">
                            <div class="invalid-feedback" ><?php echo form_error('cityAdd') ? form_error('cityAdd') : '';?></div>
                            </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState"  name="cityState" value="<?php echo isset($cityState) ? $cityState : '' ?>" class="form-control <?php echo form_error('cityState') ? 'is-invalid' : '';?>">
                          <option selected>Choose State</option>
                          <option>Cebu</option>
                           <option>Manila</option>
                            <option>Leyte</option>
                            <option>Davao</option>
                             <option>Samar</option>
                        </select>
                        <div class="invalid-feedback" ><?php echo form_error('cityState') ? form_error('cityState') : '';?></div>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" name="zipCode" class="form-control <?php echo form_error('zipCode') ? 'is-invalid' : '';?>" value="<?php echo isset($zipCode) ? $zipCode : '' ?>" id="inputZip">
                      <div class="invalid-feedback" ><?php echo form_error('zipCode') ? form_error('zipCode') : '';?></div>
                      </div>
                    </div>
                   
                    <div class="text-center clearfix" >
                    <a href="<?php echo base_url('jofcontroller/view/home')?>" class="btn btn-secondary" role="button">Cancel</a>
                    <button type="submit" name="submit" class="btn btn-secondary">Sign in</button>
                    </div>
                  </form>
                  </div>
                  </div>
                  <br>



</div>