<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/media-queries.css">
   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >
</head>
<body class="page">
   <!-- Header
   ================================================== -->
  <?php include "header.php"; ?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">
   	<div class="row">
   		<div id="main" class="eight columns">
   			<section class="page">
          <?php
          foreach(arsiv(3) as $arsiv){
            ?>
					<h2><?php echo $arsiv['arsivbaslik']; ?></h2>
					<p class="lead"><?php echo $arsiv['arsivicerik']; ?></p>
          <?php } ?>
					<div class="row archive-list">
						<div class="twelve columns">
							<h4>Son On Gönderi</h4>
				      	<ul>
                  <?php
                   foreach(arsiv(1) as $bas) { ?>
                       <li><a href="single.php?id=<?php echo $bas['id']; ?>">
                         <?php echo $bas['baslik'] ?></a></li>
                  <?php } ?>
				      	</ul>
						</div>
						<div class="twelve columns">
							<h4>Aylara Göre Arşiv</h4>
					      	<ul>
                    <?php
                    $temp;
                     foreach(arsiv(2) as $tah) {
                       $tarih = date("Y-m",strtotime($tah['tarih']));
                       if(empty($temp) OR $temp != $tarih){?>
                         <li><a href="index.php?tarih=<?php echo $tarih ?>">
                           <?php echo $tarih ?></a></li>
                      <?php }
                      $temp=$tarih ;
                    } ?>
					      	</ul>
						</div>
            <div class="twelve columns">
							<h4>Kategorilere Göre Gönderiler</h4>
              <?php
                foreach(kategori() as $kat){
                  ?>
                  <li><a href="index.php?kategoriId=<?php echo $kat['id'] ?>" title="">
                    <?php echo $kat['isim'] ?> </a>{<?php echo $kat['COUNT(*)']?>}</li>
                  <?php } ?>
						</div>
					</div> <!-- end row -->
				</section> <!-- End page -->
   		</div> <!-- End main -->
   		<?php include "sidebar.php"; ?><!-- end sidebar -->
   	</div> <!-- end row -->
   </div> <!-- end content-wrap -->
   <!-- Footer
   ================================================== -->
<?php include "foother.php"; ?>
    <!-- End Footer-->
   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>
<?php $db=null; ?>
