<!DOCTYPE html>
<?php require "database.php";
include "fonksiyon.php";
session_start(); ?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Kayıt Ol/Giriş Yap</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form">
        <div id="login">
          <form action="girindex.php" method="post">
            <div class="field-wrap">
            <label>
              Kullanıcı Adı<span class="req">*</span>
            </label>
            <input type="text" name="kullaniciadi" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Şifre<span class="req">*</span>
            </label>
            <input type="password" name="sifre" required autocomplete="off"/>
          </div>
          <button class="button button-block"/>Giriş Yap</button>
        </form>
        <?php
        if($_POST){
          $kullaniciadi = @$_POST ['kullaniciadi'];
          $sifre        = @$_POST['sifre'];
          if (girisyap($kullaniciadi,$sifre)) {
            header ("Location:admin/adminindex.php");
            $_SESSION['url']=1;
            }
            else {
              echo "<h1>ADMİN DEĞİLSİNİZ</h1>";
            }
          }
        ?>
          </form>
        </div>
      </div><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
<?php $db=null; ?>
