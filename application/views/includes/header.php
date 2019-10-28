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
      #nav{

        background: #212529;
      }

      
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

          #resources{

            text-decoration: none;
          }

    </style>
  </head>
  <body>
 <!--  <div class="jumbotron bg-light" style="height:50%;">
    <h1 class="display-5 " >JOF CUSTOMS BROKERAGE</h1>
    <p class="lead ">We provide the very best quality service our company has to offer.</p>
    <hr class="my-4">
  </div>
 -->
  <nav class="navbar navbar-expand-sm navbar-dark sticky-top" id="nav">
    <a class="navbar-brand" href="<?php echo base_url('jofcontroller/view/home')?>">JOF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item <?php if($this->uri->uri_string() == 'jofcontroller/view/home'){ echo 'active'; }?>">
               <a class="nav-link" href="<?php echo base_url('jofcontroller/view/home')?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($this->uri->uri_string() == 'jofcontroller/view/about'){ echo 'active'; }?>">
                <a class="nav-link" href="<?php echo base_url('jofcontroller/view/about')?>">About Us</a>
            </li>
            <li class="nav-item <?php if($this->uri->uri_string() == 'jofcontroller/view/resources'){ echo 'active'; }?>">
                <a class="nav-link" href="<?php echo base_url('jofcontroller/view/resources')?>">Resources</a>
            </li>
            <li class="nav-item <?php if($this->uri->uri_string() == 'jofcontroller/view/terms'){ echo 'active'; }?>">
              <a class="nav-link" href="<?php echo base_url('jofcontroller/view/terms')?>">Terms</a>
            </li>
            <li class="nav-item <?php if($this->uri->uri_string() == 'jofcontroller/view/faqs'){ echo 'active'; }?>">
              <a class="nav-link" href="<?php echo base_url('jofcontroller/view/faqs')?>">FAQs</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
              </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item <?php if($this->uri->uri_string() == 'jofcontroller/view/shipping'){ echo 'active'; }?>" href="<?php echo base_url('jofcontroller/view/shipping')?>">Shipping</a>
            <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item <?php if($this->uri->uri_string() == 'jofcontroller/view/billing'){ echo 'active'; }?>" href="<?php echo base_url('jofcontroller/view/billing')?>">Billing</a>
            <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item <?php if($this->uri->uri_string() == 'jofcontroller/view/tracking'){ echo 'active'; }?>" href="<?php echo base_url('jofcontroller/view/tracking')?>">Tracking</a>
                            
            </div>
          </li>
        </ul>
  </div>
    <div class="column">
</div>
  <a class="btn btn-sm btn-outline-light" href="<?php echo base_url('jofcontroller/view/signup');?>" role="button" style="margin-right:3px;"><span class="glyphicon glyphicon-pencil"style="margin-right:5px;"></span>Sign Up</a>


  <a class="btn btn-sm btn-outline-light" href="<?php echo base_url('jofcontroller/view/login');?>" role="button"> <span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>Login</a> 
  
   </div>
</nav>