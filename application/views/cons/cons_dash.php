

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
    <button class="btn btn-danger btn-outline-light glyphicon glyphicon-bell" role="button" data-toggle="dropdown"style="margin-left:775px;" >Notification</button>
  </div>
</div>   
  <div class="container"> 
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
      <td><a href="<?php echo base_url('jofcontroller/view/view')?>"class="btn btn-danger" role="button">View</a>
      <a href="<?php echo base_url('jofcontroller/view/status')?>" class=" btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Col Inc.</td>
      <td>123987001</td>
      <td>Damon Lance</td>
      <td>Cash</td>
      <td><a href="<?php echo base_url('jofcontroller/view/view')?>"class="btn btn-danger" role="button">View</a>    
      <a href="<?php echo base_url('jofcontroller/view/status')?>"class="btn btn-danger btn-outline-light"role="button">Status</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Col Inc.</td>
      <td>123987002</td>
      <td>Klaus Makelson</td>
      <td>Bank</td>
      <td><a href="<?php echo base_url('jofcontroller/view/view')?>"class="btn btn-danger" role="button">View</a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      <button class="btn btn-danger btn-outline-light"role="button" >Status</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Col Inc.</td>
      <td>123987911</td>
      <td>Damon Lance</td>
      <td>Cash</td>
      <td><a href="<?php echo base_url('jofcontroller/view/view')?>"class="btn btn-danger" role="button">View</a>
      <button class="btn btn-danger btn-outline-light"role="button">Status</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Col Inc.</td>
      <td>123987781</td>
      <td>Stefan Jon</td>
      <td>Bank</td>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('jofcontroller/view/view')?>"class="btn btn-danger" role="button">View</a>
      <button class="btn btn-danger btn-outline-light"role="button">Status</button></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<hr>

