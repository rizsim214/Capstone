<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > -->

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css2/styles.css">
    <title>Admin Panel</title>
    
    <style>

          .dropdown {list-style: none; background: #212529;  display: inline-block; }
          .dropdown .nav-link {color:#F8F8FF; text-decoration: none;}
          .dropdown .dropdown-menu a{color: black; text-decoration: none;}
          .dropdown .dropdown-item {background: #F8F8FF; color:#F8F8FF;}
          .dropdown .dropdown-item:hover {background: #212529; color:#F8F8FF;}
          .dropdown .dropdown-menu:active {background:#F8F8FF; color:#F8F8FF;}
          .dropdown .dropdown-menu:focus {background: #212529; color:#F8F8FF;}
          .dropdown-menu .dropdown-item {display: inline-block; width: 100%; padding: 5px 7px 10px 5px;}
          .container .dropdown .dropdown-menu a:hover
          {
            color: #F8F8FF;
            background-color: #F8F8FF;
            ;
          }


          .sidenav {
            height: 100%;
            width: 180px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #212529;
            overflow-x: hidden;
            padding-top: 10px;
          }

          .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #F8F8FF;
            display: block;
          }

          .sidenav a:hover {
            color: black;
          }

          .main {
            margin-left: 180px; /* Same as the width of the sidenav */
            font-size: 15px; /* Increased text to enable scrolling */
            padding: 0px 10px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }

          #contains{

            padding-top: 20px;
          }

         #card-pics{

          height:200px;
          width:285px;
         }

         #row_hover a{
          color: #F8F8FF;
          text-decoration: none;
         }


</style>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark relative" style="background: #212529;">
        
            <div class="col-md-11 text-right">
            <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>
                    HELLO <?php echo "EMAIL" ?>
                  </a>
                  <div class="dropdown-menu col-md-5" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Manage Account</a>
                   
                    <a class="dropdown-item" href="<?php echo site_url('jofcontroller/logout');?>">Logout</a>
                  </div>
                </li>
      </div>

  </nav>
<div class="sidenav">
 <a href="<?php echo site_url('jof/accounting');?>" class="navbar-brand" style="font-size:22px;">Accounting</a>
 

      <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Transactions
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Transactions</a>
                <a class="dropdown-item" href="#">Transaction History</a>
                
              </div>
            </li>


            <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Accounting 
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Set Payments</a>
                <a class="dropdown-item" href="#">Unsettled Dues</a>
                <a class="dropdown-item" href="#">TBD</a>
              </div>
            </li>

             <div class="dropdown-divider" id="divider"></div>
        
               
</div>

