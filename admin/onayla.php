<?php
session_start();
require "../database.php";
 include "../fonksiyon.php";
 if(@$_SESSION['onay']==2){
       $id = @$_GET['id'];
       $fonksiyon = yorumguncelle($id);
       if($fonksiyon > 0){
         echo "onaylama başarılı";
         header("Location:yorum.php");
       }else{
        echo "onaylama yapılamadı";
        }
}elseif(@$_SESSION['onay']==1){
        $id = @$_GET['id'];
        $fonksiyon = gonderionayla($id);
        if($fonksiyon > 0){
          echo "gönderi yayınlandı";
          header("Location:adminindex.php");
        }else{
         echo "gönderi yayınlanamadı";
         }
}
  ?>
