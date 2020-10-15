<?php
session_start();
if($_SESSION['url'] !== 1){
	header("Location:../girindex.php");
} else {
include "adminheader.php"; ?>
		  <div class="col-md-10">
	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					        </div>
			  				<div class="panel-body">
                  <h2>Yeni Admin</h2>
			  					<form action="" method="post">
									<fieldset>
										<div class="form-group">
											<label>İsim</label>
											<input name="isim" class="form-control" placeholder="Ad.." type="text">
										</div>
                    <div class="form-group">
											<label>Soyisim</label>
											<input name="soyisim" class="form-control" placeholder="Soyad.." type="text">
										</div>
                    <div class="form-group">
											<label>Kullanıcı Adı</label>
											<input name="kullaniciadi" class="form-control" placeholder="Kullanıcı Adı.." type="text">
										</div>
                    <div class="form-group">
											<label>Şifre</label>
											<input name="sifre" class="form-control" placeholder="Şifre.." type="text">
										</div>
                    <div class="form-group">
											<label>Telefon Numarası</label>
											<input name="tlno" class="form-control" placeholder="Telefon Numarası.." type="text">
										</div>
                    <div class="form-group">
											<label>Mail</label>
											<input name="mail" class="form-control" placeholder="Mail.." type="text">
										</div>
									</fieldset>
                  <div>
										<input class="btn btn-success" type="submit" value="Ekle" name="ekle">
									</div>
                  <?php
                      if($_POST){
                         $isim = mb_strtolower(@$_POST['isim']);
                         $soyisim = mb_strtolower(@$_POST['soyisim']);
                         $kullaniciadi = @$_POST['kullaniciadi'];
                         $sifre = @$_POST['sifre'];
                         $tlno = @$_POST['tlno'];
                         $mail = @$_POST['mail'];
                         $single = kayitek($isim,$soyisim,$kullaniciadi,$sifre,$tlno,$mail);
                         if($single > 0){
                           echo "ekleme başarılı";
                         }else{
                            echo "ekleme yapılamadı";
                         }
                    } ?>
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
		  </div>
		</div>
    </div>
<?php include "adminfooter.php"; } ?>
