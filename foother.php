<?php require "database.php";
include_once "fonksiyon.php"; ?>
<footer>

   <div class="row">

     <div class="twelve columns">
     <ul class="social-links">
       <!-- SOSYAL MEDYA -->
     <?php
        $sor=sosyal() ?>

            <li><a href="<?php echo $sor['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $sor['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $sor['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="<?php echo $sor['github']; ?>"><i class="fa fa-github-square"></i></a></li>
            <li><a href="<?php echo $sor['instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo $sor['flickr']; ?>"><i class="fa fa-flickr"></i></a></li>
            <li><a href="<?php echo $sor['skype']; ?>"><i class="fa fa-skype"></i></a></li>
            
         </ul>
     </div>
<!-- SOSYALMEDYA KAPA -->
      <div class="six columns info">

         <h3>About Keep It Simple</h3>

         <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
         Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
         nibh id elit.
         </p>

         <p>Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
         sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.</p>

      </div>

      <div class="four columns">

         <h3>Photostream</h3>

         <ul class="photostream group">
        <?php
        foreach (foto() as $foto) {
        ?>
        <li><a href="#"><img alt="thumbnail" src="<?php echo $foto['isim'] ?>"></a></li>
         <?php  } ?>
         </ul>

      </div>

      <div class="two columns">
         <h3 class="social">Navigate</h3>
         <ul class="navigate group">
           <?php
             foreach(menu() as $menu){
               ?>
               <li><a href="<?php echo $menu['link'] ?>"><?php echo $menu['isim']?></a></li>
              <?php } ?>
         </ul>
      </div>

      <p class="copyright">&copy; Copyright 2014 Keep It Simple. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>

   </div> <!-- End row -->

   <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

</footer> <!-- End Footer-->
<?php $db = null; ?>
