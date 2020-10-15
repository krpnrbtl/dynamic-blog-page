<?php
session_start();
if($_SESSION['url'] !== 1){
	header("Location:../girindex.php");
} else {
include "adminheader.php";
$_SESSION['sil']=1;
$_SESSION['onay']=1; ?>
<div class="row">
	<div class="col-md-9">
		<div class="content-box-large">
		  <div class="panel-heading">
				<div class="panel-title"><h2>GÖNDERİLER</h2></div>
			</div>
			<div class="panel-body">
	  		<table class="table table-striped">
			     <thead>
              <tr>
                <th>Başlık</th>
                <th>İçerik</th>
              </tr>
          </thead>
					<?php foreach (icerikadmin() as $single){ ?>
          <tbody>
						<?php if($single['tip']==1){ ?>
            <tr>
              <td><?php echo $single['baslik']; ?></td>
              <td><?php
				      if (strlen($single['icerik']) >= 100) {
				                     echo nl2br(substr($single['icerik'], 0,100));
				                   echo '<a href=gonderidevam.php?id='.$single['id'].' title=\''.$single['icerik'].'\'> Devamı..</a>';
				                   }
				                   else echo $single['icerik'];
				                   ?>
						  </td>
              <td>
								<a class="btn btn-primary"href="gonderiguncelle.php?id=<?php echo $single['id']; ?>" title="" >
                  <i class="glyphicon glyphicon-pencil"></i>Güncelle</a><br></br>
                <a class="btn btn-danger"href="sil.php?id=<?php echo $single['id']; ?>" title="" >
                  <i class="glyphicon glyphicon-remove"></i>Sil</a>
								</td>
            </tr>
						<?php }
						if($single['tip']==0){ ?>
            <tr>
              <td><?php echo $single['baslik']; ?></td>
              <td><?php
				      if (strlen($single['icerik']) >= 100) {
				                     echo nl2br(substr($single['icerik'], 0,100));
				                   echo '<a href=gonderidevam.php?id='.$single['id'].' title=\''.$single['icerik'].'\'> Devamı..</a>';
				                   }
				                   else echo $single['icerik'];
				                   ?>
						  </td>
              <td>
								<a class="btn btn-primary"href="gonderiguncelle.php?id=<?php echo $single['id']; ?>" title="" >
                  <i class="glyphicon glyphicon-pencil"></i>Güncelle</a><br></br>
                <a class="btn btn-danger"href="sil.php?id=<?php echo $single['id']; ?>" title="" >
                  <i class="glyphicon glyphicon-remove"></i>Sil</a><br></br>
								<a class="btn btn-success" href="onayla.php?id=<?php echo $single['id']; ?>" title="" >
									<i class="glyphicon glyphicon-ok"></i>Yayınla</a>
								</td>
            </tr>
						<?php } } ?>
					</tbody>
				</table>
 			 </div>
		  </div>
		 </div>
		</div>
<?php include "adminfooter.php"; } ?>
