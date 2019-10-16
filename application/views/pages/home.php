<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo site_url();?>assets/pics/shipping.jpg" alt="shipping" style="width:100%; height:450px">
        <div class="carousel-caption">
          <h3>Shipping</h3>
          <p>Efficient Shipping locally or internationally.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo site_url();?>assets/pics/trucking.jpg" alt="trucking" style="width:100%; height:450px">
        <div class="carousel-caption">
        <h3>Trucking</h3>
          <p>Reliable on trucking.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo site_url();?>assets/pics/delivering.jpg" alt="delivering" style="width:100%; height:450px">
        <div class="carousel-caption">
        <h3>Delivering</h3>
          <p>Trusted delivery.</p>
        </div>
      </div>
    </div>

 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<br>
		<br>

<div class="container">  
<div class="card-deck" style="width:100%; height: auto;" >
  <div class="card text-center">
    <img class="card-img-top" src="<?php echo site_url();?>assets/pics/delivering.jpg" alt="shipping" style="width:100%; height:50%;">
    <div class="card-body">
      <h5 class="card-title">Shipping</h5>
      <p class="card-text">Broad Description on what would happen in an appointment, topics to be discussed</p>
    </div>
    <div class="card-footer">
      <a href="<?php echo base_url('jofcontroller/view/shipping')?>" class="btn btn-danger">Go somewhere</a>
    </div>
  </div>
  <div class="card text-center">
    <img class="card-img-top" src="<?php echo site_url();?>assets/pics/shipping.jpg" alt="billing" style="width:100%; height:50%;">
    <div class="card-body">
      <h5 class="card-title">Billing</h5>
      <p class="card-text">Broad Description on what would happen in an appointment, topics to be discussed</p>
    </div>
    <div class="card-footer">
      <a href="<?php echo base_url('jofcontroller/view/billing')?>" class="btn btn-danger">Go somewhere</a>
    </div>
  </div>
  <div class="card text-center ">
    <img class="card-img-top" src="<?php echo site_url();?>assets/pics/trucking.jpg" alt="tracking" style="width:100%; height:50%;">
    <div class="card-body">
      <h5 class="card-title">Tracking</h5>
      <p class="card-text">Broad Description on what would happen in an appointment, topics to be discussed</p>
    </div>
    <div class="card-footer">
      <a href="<?php echo base_url('jofcontroller/view/tracking')?>" class="btn btn-danger" >Go somewhere</a>
    </div>
  </div>
</div>
		<br>
	<br>
<br>
</div>

<div class="container text-center">
	<hr>
	<br>
		<br>
	<h4 class="media-heading">Set an Appointnment</h4>
	<p> Schedule an appointment to have a consultation with us!</p>
	<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Click here</button>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Set Appointment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Full Name</label>
            <input type="text" class="form-control" id="full-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contact Number</label>
            <textarea class="form-control" id="contact-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email Address</label>
            <textarea class="form-control" id="email-text"></textarea>
          </div>
          <div class="form-group" >
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" style="padding-bottom: 100px;"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center">
          <p href= "<?php echo base_url('jofcontroller/view/signup')?>">Appointment Sent</p>
        </div>
      </div>

    </div>
  </div>

   	 </div>
 	</div>
	</div>
</div>
	
	<br>
		<br>
			<br>
	<hr>

   <div class="media text-left ">
    <div class="media-left media-top ">
      <img src="<?php echo site_url();?>assets/pics/avatar.png" class="media-object" style="width:80px">
    </div>
 
 <div class="media-body text-left">
      <h4 class="media-heading ">Jane Bennet</h4>
      <p>JOF Brokerage has a great commincation to their consignee when it comes on shipping, whether importing or exporting a cargo. :)</p>
      
    </div>
  </div>
  <hr>
  <div class="media text-left ">
    <div class="media-left media-left ">
      <img src="<?php echo site_url();?>assets/pics/avatar.png" class="media-object" style="width:80px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Mark Salvatore</h4>
      <p>Whether you're an entrepreneur or enterprise, JOF tools and technologies will help you create efficiencies, centralize control, cut costs, and increase productivity. <br>
      And with more flexibility and better insight, you'll have peace of mind that you're shipping the best way for your business.</p>
      
    </div>
  </div>
  <hr>
  <div class="media">
    <div class="media-left media-bottom ">
      <img src="<?php echo site_url();?>assets/pics/avatar.png" class="media-object" style="width:80px">
    </div>
    <div class="media-body text-left">
      <h4 class="media-heading">Carl Forbes</h4>
      <p>They developed a range of tracking tools that deliver precisely the information you need, where and when you need it. So you can re-route those violins to arrive at school for the first day of class.<br> 
      Or estimate delivery of that life-saving medicine so the clinic can schedule staff.</p>
     <br>
      
    </div>
  </div>
</div>

</div>