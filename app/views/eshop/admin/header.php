<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?= $data['page_title'] . ' - ' . WEBSITE_TITLE ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php  echo ASSETS . THEME ?>admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php  echo ASSETS . THEME ?>admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php  echo ASSETS . THEME ?>admin/css/style.css" rel="stylesheet">
    <link href="<?php  echo ASSETS . THEME ?>admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim  Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=ROOT?>admin" class="logo"><b>BLIB ADMIN </b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                 
                  
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?=ROOT?>">Website</a></li>
            	</ul>

                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?=ROOT?>logout">Logout</a></li>
            	</ul>

            </div>
        </header>
      <!--header end-->