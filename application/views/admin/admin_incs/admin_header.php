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
          .dropdown .dropdown-item:hover {background: #A9A9A9; color:#F8F8FF;}
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
            padding-top: 50px;
          }

          .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #F8F8FF;
            display: block;
          }

          .sidenav a:hover {
            color: #808080;
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

         #avatar-pics{
          width:175px; 
          height: auto;
          margin:0px 10px 10px;
          border:0px;
          border-radius: 5px;
          position: relative;
         
         }
         #msg-con{

          border:1px solid black; 
          margin: 30px 80px 25px ;
         background-color: #DCDCDC;
         border-radius: 10px;
         }

       #rating{
        font-size: 20px;
        padding-top: 20px;
       }
       #navigate{
        margin-bottom: 20px;
       }
        
        #msg-con2{

          border:1px solid black; 
          margin: 30px 80px 25px ;
         background-color: #FFB6C1;
         border-radius: 10px;
         }
</style>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: #212529;">
            
            <div class="col-md-11 text-right">
            <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>
                   Welcome <?php echo $fName;  ?>
                  </a>
                  <div class="dropdown-menu col-md-5" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/add_account');?>">Manage Account</a>
                    <a class="dropdown-item" href="<?php echo site_url('jofcontroller/logout');?>">Logout</a>
                  </div>
                </li>
      </div>


  </nav>
<div class="sidenav">
 <a href="<?php echo site_url('jof/admin');?>" class="navbar-brand relative" style="font-size:22px;">Dashboard</a>
 

      <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Transactions
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/transactions');?>">Transactions</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/transact_history');?>">Transaction History</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/transact_reports');?>">Transaction Reports</a>
              </div>
            </li>

            <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Reports
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/feedback_rating');?>"> Ratings & Feedbacks </a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/reports');?>"> Report</a>
              </div>
            </li>

            <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Accounting 
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/set_payment');?>">Set Payments</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/unsettled_dues');?>">Unsettled Dues</a>
               
              </div>
            </li>

        <div class="dropdown-divider" id="divider"></div>
        <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Employees 
              </a>
              <div class="dropdown-menu col-md-5 text-center" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/view_accounts');?>">All Accounts</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon//adminData/add_account');?>">Add Account</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/admincon/adminData/view_evaluation');?>">Evaluation</a>
              </div>
            </li>
             <div class="dropdown-divider" id="divider"></div>
               
</div>

