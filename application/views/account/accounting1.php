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
  </div>
</br>
<div class="text-center">
  <h2>Accounting</h2>     
    <button class="btn btn-danger btn-outline-light glyphicon glyphicon-bell" role="button" data-toggle="dropdown"style="margin-left:900px;" >Notification</button>
  </div>
</div>   
  <div class="container">  
  <table class="table table-striped " >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date Created</th>
      <th scope="col">Consignee Name</th>
      <th scope="col">Broker Name</th>
      <th scope="col" >Status</th>
      <th scope="col">PDF File</th>
      <th scope="col">Billing</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>9/1/19</td>
      <td>Ben Goldie</td>
      <td>Markus the Broker</td>
      <td><button type="button" class="btn btn-danger" disabled>Pending</td>
      <td><a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">View PDF</a>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">Bill</a>  
    </div>
  </div>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>9/4/19</td>
      <td>Ivana Alawi</td>
      <td>Desmon the Broker</td>
      <td><button type="button" class="btn btn-success" disabled>Active</td>
      <td><a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">View PDF</a>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">Bill</a>        
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>9/7/19</td>
      <td>Mark Castillo</td>
      <td>Adam the Broker</td>
      <td><button type="button" class="btn btn-success" disabled>Active</td>
      <td><a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">View PDF</a>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">Bill</a>    
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <tr>
      <th scope="row">4</th>
      <td>9/14/19</td>
      <td>Gwen Garci</td>
      <td>Damian the Broker</td>
      <td><button type="button" class="btn-dark" disabled>Finished</td>
      <td><a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">View PDF</a>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">Bill</a>  

    <tr>
      <th scope="row">5</th>
      <td>9/20/19</td>
      <td>Demonic Ochoa</td>
      <td>Janoski the Broker</td>
      <td><button type="button" class="btn-dark" disabled>Finished</td>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">View PDF</a>
      <td>
        <div class="btn-group-horizontal">
        <a href="<?php echo base_url('')?>"class="btn btn-danger" role="button">Bill</a>  

  </div>
</div>
</td>
</div>
</thead>
</table>
</div>