
<div class="container">
	
    <div class="modal-content">
        <div class= "modal-header" style="padding:35px 50px;">      
        </div>
         <h1 class="text-center">Login Account</h1>
        <div class="modal-body" style="padding:40px 50px;">

          <?php echo validation_errors('Error','<div class="danger"> , </div>');?>


          <form role="form" method="POST" action="<?php echo site_url('jofcontroller/accounts');?>">
            
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="username" placeholder="Enter email">
            </div>
            <label form="usrname"><span class="glyphicon glyphicon-eye-open"></span> Password</label></br>            
              <input type="password" class="form-control" placeholder="Enter password" name="password" id="example">
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <div class="text-center" style="height: 50px;">
              <a href="<?php echo base_url('jofcontroller/view/home')?>" class="btn btn-danger" role="button">Back</a>
              <button type="submit" class="btn btn-danger" name="submit" role="button">Login</button>
              </div>

          </form>
        </div>
       
          <p style= "padding: 1px 50px">Not a member yet? <a href="<?php echo base_url('jofcontroller/view/signup')?>">Sign Up</a></p>

          
        </div>
      </div>
      
    </div>
  </div> 
</div>


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

 <script src="/path/to/password-score.js"></script>
<script src="/path/to/password-score-options.js"></script>
<script src="/path/to/bootstrap-strength-meter.js"></script>

</div>
</div>
<br>