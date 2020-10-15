<?php
session_start();
require "../database.php";
include "../fonksiyon.php";
       if(@$_SESSION['sil']==1) {
                $id = @$_GET['id'];
                $fonksiyon = gonderisil($id);
                if($fonksiyon > 0){
                  echo "silme başarılı";
                  header("Location:adminindex.php");
                }else{
                   echo "silme yapılamadı";
                 }
         }else if(@$_SESSION['sil']==2){
            $id = @$_GET['id'];
            $fonksiyon = yorumsil($id);
            if($fonksiyon > 0){
              echo "silme başarılı";
              header("Location:yorum.php");
           }else{
              echo "silme yapılamadı";
           }
       }
   ?>
