<?php require "database.php";  ?>
<?php include_once "fonksiyon.php";  ?>

<header id="top">

 <div class="row">

   <div class="header-content twelve columns">
       <?php
       $sorgu= sosyal()?>
         <h1 id="logo-text"><a href="index.php" title=""><?php echo $sorgu['baslik']?></a></h1>
         <p id="intro"><?php echo $sorgu['slogan'] ?></p>
   </div>

  </div>

  <nav id="nav-wrap">

   <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
    <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

   <div class="row">
       <ul id="nav" class="nav">
         <!-- MENU -->
         <?php
           foreach(menu() as $menu){
             ?>
            <li><a href="<?php echo $menu['link'] ?>"><?php echo $menu['isim']?></a></li>
           <?php } ?>
           <!-- MENU KAPA -->
       </ul> <!-- end #nav -->

   </div>

  </nav> <!-- end #nav-wrap -->

</header> <!-- Header End -->
