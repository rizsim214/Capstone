<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> -->
   <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/styles.css">  -->
    <title>Admin Panel</title>
    
  </head>
  <body>



<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="<?php echo base_url('jof/admin');?>">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Transactions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      </ul>
    
     <div class="collapse navbar-collapse text-right col-sm-2" id="navbarColor01">
       <ul class="navbar-nav ">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarColor01" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="glyphicon glyphicon-user"></span> Accounts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarColor01">
          <a class="dropdown-item" href="#">Profile Management</a>
          <a class="dropdown-item" href="#">Unsettled Dues</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>

    
  </div>
</nav>