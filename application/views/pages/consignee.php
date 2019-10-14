<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

     

    <div class="text-center">

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
<div class="text-center">
     <a href="<?php echo base_url('jofcontroller/view/import')?>" class="btn btn-danger btn-outline-light"role="button" style="margin-right:50px;"><span style="margin-right:3px;"></span>Import</a>
       <a href="<?php echo base_url('jofcontroller/view/export')?>" class="btn btn-danger btn-outline-light"role="button" style="margin-right:3px;"><span style="margin-right:5px;"></span>Export</a>
     </div>
    <br>
  </div>
</br>
<hr>
<div class="text-center">
  <h2>Transactions</h2>     
    <a class="btn btn-danger btn-outline-light glyphicon glyphicon-bell" role="button" data-toggle="dropdown"style="margin-left:900px;" >Notification</a>
  </div>
</div>   
    
  <table class="table table-striped " >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Entry Number</th>
      <th scope="col">Broker Rep</th>
      <th scope="col" >Mode of Payment</th>
      <th scope="col">Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Col Inc.</td>
      <td>123987000</td>
      <td>Markus Bennet</td>
      <td>Bank</td>
      <td><a class="btn btn-danger btn-outline-light"role="button" >View</a>
      <a class="btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Col Inc.</td>
      <td>123987001</td>
      <td>Damon Lance</td>
      <td>Cash</td>
      <td><a class="btn btn-danger btn-outline-light"role="button">View</a>
      <a class="btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Col Inc.</td>
      <td>123987002</td>
      <td>Klaus Makelson</td>
      <td>Bank</td>
      <td><a class="btn btn-danger btn-outline-light"role="button">View</a>
      <a class="btn btn-danger btn-outline-light"role="button" >Status</a></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Col Inc.</td>
      <td>123987911</td>
      <td>Damon Lance</td>
      <td>Cash</td>
      <td><a class="btn btn-danger btn-outline-light"role="button">View</a>
      <a class="btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Col Inc.</td>
      <td>123987781</td>
      <td>Stefan Jon</td>
      <td>Bank</td>
      <td>
        <div class="btn-group-horizontal">
        <a class="btn btn-danger btn-outline-light"role="button">View</a>
      <a class="btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
  </tbody>
</table>
</div>
<hr>
