<?php require "database.php" ?>
<div id="sidebar" class="four columns">

  <div class="widget widget_search">
      <h3>Arama</h3>
      <form action="index.php" method="get">
         <input type="text" name="arama" value="Arama yap.."
                onblur="if(this.value == '') { this.value = 'Search here...'; }"
                onfocus="if (this.value == 'Search here...') { this.value = ''; }"
                class="text-search">
         <input type="submit" value="" class="submit-search">
      </form>
   </div>
<!-- KATEGORİLER -->
  <div class="widget widget_categories group">
    <h3>Categories</h3>
    <?php
      foreach(kategori() as $kat){
        ?>
        <li><a href="index.php?kategoriId=<?php echo $kat['id'] ?>" title="">
          <?php echo $kat['isim'] ?>
          </a>{<?php echo $kat['COUNT(*)']?>}</li>
        <?php } ?>
  </div>
<!-- KATEGORİ KAPA-->
<!-- ETİKET -->
<div class="widget widget_text group">
  <h4>Diğer Staj Blogları</h4>
  <ul>
      <?php
       $sorgu =$db->query("SELECT * FROM takip")->fetchAll(PDO::FETCH_ASSOC);
       foreach ($sorgu as $yazi) {?>
           <li><a href=<?php echo $yazi['link'];?>><?php echo nl2br(htmlspecialchars($yazi['kullanici']));?></a></li>
          <?php } ?>
        </ul>
    </div>
  <div class="widget widget_tags">
         <h3>Post Tags.</h3>
         <div class="tagcloud group">
        <?php
        foreach(adminetiket() as $eti){ ?>
            <a href="index.php?etiketid=<?php echo $eti['id'] ?>">
              <?php echo $eti['isim']; ?></a>
        <?php } ?>
         <div class="tagcloud group"></div>
      </div>
<!-- ETİKET KAPA-->
      <div class="widget widget_popular">
         <h3>Popular Post.</h3>
         <ul class="link-list">
           <?php foreach(populer() as $popu){ ?>
            <li><a href="single.php?id=<?php echo $popu['id']; ?>">
              <?php echo $popu['baslik']; ?></a></li>
           <?php } ?>
         </ul>
      </div>

</div> <!-- end sidebar -->
<?php $db=null; ?>
