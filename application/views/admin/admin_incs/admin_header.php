<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/styles.css">
    <title>JOF Customs Brokerage</title>
    <style type="text/css">
        body{
          font-family: Arial, Helvetica, sans-serif;
        }
    </style>
  </head>
  <body>
  

  <nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed-top">
    <img src="<?php echo site_url();?>assets/pics/" alt="logo"></img>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item <?php if($this->uri->uri_string() == 'admin/admincon/view_admin/admin_dash'){ echo 'active'; }?>">
               <a class="nav-link" href="<?php echo base_url('admin/admincon/view_admin/admin_dash');?>">Dashboard <?php if($this->uri->uri_string() == 'admin/admincon/view_admin/admin_dash'){ echo '<span class="sr-only">(current)</span>'; }?></a>
            </li>
            
    <div class="column">

  
  <a class="btn btn-sm btn-outline-light" href="<?php echo base_url('jofcontroller/view/login');?>" role="button"> <span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>Logout</a> 
  
   </div>
</nav>