<!DOCTYPE html>
<html>
  <head>
    <title>Admin Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

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
	                 <h1><a href="index.php">Admin Paneli</a></h1>
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hesabım<b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="login.php">Logout</a></li>
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
              <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Panelim</a></li>
              <li><a href="kategoriekle.php"><i class="glyphicon glyphicon-tasks"></i>Kategori Ekle</a></li>
              <li><a href="editors.php"><i class="glyphicon glyphicon-pencil"></i>Gönderi Ekle </a></li>
              <li><a href="tables.php"><i class="glyphicon glyphicon-list"></i> Tablo</a></li>
              <li><a href="buttons.php"><i class="glyphicon glyphicon-record"></i> Buton</a></li>
              <li><a href="forms.php"><i class="glyphicon glyphicon-tasks"></i> Form</a></li>
              </ul>
             </div>
		  </div>
		  <div class="col-md-10">
  			<div class="content-box-large">
          <div class="panel-heading">
        </div>
        <div class="content-box-large">
          <div class="panel-heading">
          <div class="panel-title"><h1>Yeni Gönderi</h1></div>
          <div class="panel-heading">
           </div>
         <div class="panel-body">
           <form action="">
           <fieldset>
             <div class="form-group">
               <label>Gönderi Başlık</label>
               <input class="form-control" placeholder="Gönderi Başlık" type="text">
             </div>
           </fieldset>
         </form>
         </div>
          <div class="panel-options">
            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
          </div>
        </div>
          <div class="panel-body">
            <label>Gönderi İçerik Ekle </label>
            <textarea id="ckeditor_full"></textarea>
          </div>
          <div class="panel-body">
            <form action="">
            <fieldset>
              <div class="form-group">
                <label>Etiketler</label>
                <input class="form-control" placeholder="" type="text">
              </div>
            </fieldset>
          </form>
          </div>
          <div class="btn-group" >
            <button type="button" class="btn btn-default" >Kategoriler</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Gönder</button>
            </div>
          </div>
        </div>
		  </div>
		</div>
    </div>
    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Adminela</a>
            </div>

         </div>
      </footer>

     <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>
  </body>
</html>
