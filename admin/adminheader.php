<!DOCTYPE html>
<?php require "../database.php"; ?>
<?php include "../fonksiyon.php"; ?>
<html>
  <head>
    <title>ADMİN PANELİ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="adminindex.php">Admin Paneli</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hesap<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="../cikisyap.php">Çıkış Yap</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="adminindex.php"><i class="glyphicon glyphicon-home"></i>Panel</a></li>
                      <li><a href="gonderiekle.php"><i class="glyphicon glyphicon-pencil"></i>Gönderi Ekle</a></li>
                      <li><a href="kategoriduzenle.php"><i class="glyphicon glyphicon-pencil"></i>Kategori Duzenle</a></li>
                      <li><a href="menu.php"><i class="glyphicon glyphicon-pencil"></i>Menu Ekle/Sil</a></li>
                      <li><a href="etiketduzenle.php"><i class="glyphicon glyphicon-pencil"></i>Etiket Düzenle</a></li>
                      <li><a href="yorum.php"><i class="glyphicon glyphicon-pencil" ></i>Yorum Onayla/Sil</a></li>
                      <li><a href="kullaniciekle.php"><i class="glyphicon glyphicon-user"></i>Kullanıcı Ekle</a></li>
                    </ul>
             </div>
		  </div>
