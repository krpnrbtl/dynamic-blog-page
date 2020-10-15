
<?php include_once "fonksiyon.php"; ?>
<div id="main" class="eight columns">

  <?php
    if (isset($_GET['arama']))
       $gonderiler = icerik($_GET['arama']);
    elseif (isset($_GET['kategoriId']))
       $gonderiler = kategorigit($_GET['kategoriId']);
    elseif (isset($_GET['etiketid']))
       $gonderiler = etiketgit($_GET['etiketid']);
    elseif(isset($_GET['tarih']))
       $gonderiler = tarihgit($_GET['tarih']);
    else
       $gonderiler = icerik();
    foreach ($gonderiler as $bas){ ?>
  <article class="entry">
    <header class="entry-header">
      <h2 class="entry-title">
         <a href="single.php?id=<?php echo $bas['id']; ?>" title="">
           <?php echo $bas['baslik'] ?> </a>
      </h2>
      <div class="entry-meta">
        <ul>
          <li><?php echo date("D M  Y g:i A",strtotime($bas['tarih'] ))?></li>
          <span class="meta-sep">&bull;</span>
          <li>
            <a href="#" title="" rel="category tag"><?php echo $bas['isim'] ?></a>
          </li>
          <span class="meta-sep">&bull;</span>
          <li><?php echo $bas['kullaniciadi'] ?></li>
        </ul>
      </div>
    </header>
    <div class="entry-content">
      <?php
       if (strlen($bas['icerik']) >= 300) {
           echo nl2br(substr($bas['icerik'], 0,300));
           echo '<a href=single.php?id='.$bas['id'].' title=\''.$bas['icerik'].'\'>
           Devamı için tıklayınız..</a>';
       } else echo $bas['icerik'];
       ?>
      		</article> <!-- end entry -->
        <?php
       }
      	?>
</div> <!-- end main -->
<?php $db=null; ?>
