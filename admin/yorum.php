<?php
session_start();
if($_SESSION['url'] !== 1){
	header("Location:../girindex.php");
} else {
include "adminheader.php";
$_SESSION ['sil']=2;
$_SESSION ['onay']=2; ?>
<div class="row">
  <div class="col-md-9">
    <div class="content-box-large">
      <div class="panel-heading">
       <div class="panel-title">YORUMLAR</div>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
              <thead>
                <tr>
                  <th>İçerik</th>
                  <th>Yorum Yapan</th>
                  <th>Gönderi Başlık</th>
                </tr>
              </thead>
              <tbody>
                <form action="yorum.php" method="POST">
                 <?php foreach (@adminyorum() as $single ) {
                  if($single['tip']==0){ ?>
                    <tr>
                      <td><?php echo $single['icerik'] ?></td>
                      <td><?php echo $single['isim'] ?></td>
                      <td><a href="../single.php?id=<?php echo $single['gonderiid']; ?>" title=""><?php echo $single['baslik'] ?></a></td>
                      <td><a href="sil.php?id=<?php echo $single['id']; ?>" class="btn btn-danger" ><i class="glyphicon glyphicon-remove"></i>Sil</a>
                        <a href="onayla.php?id=<?php echo $single['id']; ?>" class="btn btn-success" ><i class="glyphicon glyphicon-ok"></i>Onayla</a>
                      </td>
                     </tr>
                    <?php } } ?>
               </form>
               <form action="yorum.php" method="POST">
                <?php foreach (@adminyorum() as $single ) {
                 if($single['tip']==1){ ?>
                   <tr>
                     <td><?php echo $single['icerik'] ?></td>
                     <td><?php echo $single['isim'] ?></td>
                     <td><a href="../single.php?id=<?php echo $single['gonderiid']; ?>" title=""><?php echo $single['baslik'] ?></a></td>
                     <td>
                         <a href="sil.php?id=<?php echo $single['id']; ?>" class="btn btn-danger" ><i class="glyphicon glyphicon-remove"></i>Sil</a></td>
                    </tr>
                   <?php }
                 } ?>
              </form>
              </tbody>
            </table>
      </div>
    </div>
  </div>
</div>
<?php include "adminfooter.php"; } ?>
