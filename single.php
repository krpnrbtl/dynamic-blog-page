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
<body class="single">
   <!-- Header
   ================================================== -->
   <?php include "header.php"; ?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">
   	<div class="row">
   		<div id="main" class="eight columns">
        <?php if (isset($_GET['id'])) {
          $single = @icer($_GET['id']);
        }else {
          header("Location:single.php?id=1");
        }
        if(@$single['tip']==1){
        ?>
   			<article class="entry">
					<header class="entry-header">
						<h2 class="entry-title"><?php echo @$single['baslik'] ?></h2>
						<div class="entry-meta">
							<ul>
								<li><?php echo date("D M Y g:i A", strtotime(@$single['tarih']))  ?></li>
								<span class="meta-sep">&bull;</span>
								<li>
                  <a href="#" title="" rel="category tag"><?php echo @$single['isim']?></a>,
								</li>
								<span class="meta-sep">&bull;</span>
								<li><?php  echo $single['kullaniciadi'] ?></li>
							</ul>
						</div>
					</header>
					<div class="entry-content">
						<p class="lead"><?php echo $single['icerik'] ?></p>
        		</div>
            <p class="tags"><span>Etiket: </span>
                <a href="index.php?etiketid=<?php echo $single['etiketid'] ?>" >
                  <?php echo @$single['etiket'] ?></a>
           </p>
  			       <ul class="post-nav group">
  			            <li class="prev"><a rel="prev" href="single.php?id=<?php
                     if($single['id'] !="1"){
                      echo $single['id']-1;
                    } else {
                      echo $single['id'];
                    } ?>"><strong>Önceki</strong></a></li>
                    <?php $sorgu=$db->query("SELECT COUNT(*) FROM gonderi WHERE tip=1")->fetch(PDO::FETCH_ASSOC); ?>
  				         <li class="next"><a rel="next" href="single.php?id=<?php
                    if($single['id'] != $sorgu['COUNT(*)']){
                      echo $single['id']+1;
                    } else {
                      echo $single['id'];
                    } ?> "><strong>Sonraki</strong></a></li>
  			        </ul>
              <?php } ?>
				</article>
				<!-- Comments
            ================================================== -->
            <div id="comments">
               <h3>YORUMLAR</h3>
               <!-- commentlist -->
               <?php foreach (@yorum($_GET['id']) as $single ) {
                 if($single['tip']==1){?>
               <ol class="commentlist">
                  <li class="depth-1">
                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/user-01.png" alt="">
                     </div>
                     <div class="comment-content">
	                     <div class="comment-info">
	                        <cite><?php echo $single['isim'] ?></cite>
	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">
                               <?php echo $single['tarih'] ?></time>
	                        </div>
	                     </div>
	                     <div class="comment-text">
	                        <p><?php echo $single['icerik'] ?></p>
	                     </div>
	                  </div>
                  </li>
                  <?php }
                } ?> <!-- Comments End -->
                               <!-- respond -->
               <div class="respond">
                  <h3>Yorum Yap</h3>
                  <!-- form -->
                  <form name="contactForm" id="contactForm" method="post" action="">
      					   <fieldset>
                         <div class="group">
      						      <label for="isim">İsim <span class="required">*</span></label>
      						      <input name="isim" type="text" id="isim" size="35" value="" />
                         </div>
                         <div class="group">
      						      <label for="website">Website</label>
      						      <input name="website" type="text" id="website" size="35" value="" />
                         </div>
                         <div class="message group">
                            <label  for="aciklama">aciklama <span class="required">*</span></label>
                            <textarea name="aciklama"  id="aciklama" rows="10" cols="50" ></textarea>
                         </div>
                         <button type="submit" class="submit">Paylaş</button>
      					   </fieldset>
  				      </form> <!-- Form End -->
               </div> <!-- Respond End -->
                   <?php
                   if($_POST){ // Form Gönderilmişmi Kontrolü Yapalım
                       $isim     = $_POST["isim"];    // Formdan Gelen Kayıtlar
                       $website  = $_POST["website"];  // Formdan Gelen Kayıtlar
                       $aciklama = strip_tags($_POST["aciklama"]); // Formdan Gelen Kayıtlar
                       $single = yorumekle($aciklama, $website, $isim, $_GET['id']);
                       if($single){
                           echo "Admin Onayı Bekleniyor !";
                       }else{
                           echo "Bir Sorun Oluştu";
                       }
                   }
                   ?>
            </div>
   		</div> <!-- main End -->
   		<?php include "sidebar.php"; ?> <!-- end sidebar -->
  		</div> <!-- end row -->
   </div> <!-- end content-wrap -->
   <!-- Footer
   ================================================== -->
   <?php include "foother.php"; ?> <!-- End Footer-->
	<!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>
