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
			  					<form action="menu.php" method="post">
									<fieldset>
										<div class="form-group">
											<label>Menü Ekle</label>
											<input name="isim" class="form-control" placeholder="Menü.." type="text">
                      <input name="link" class="form-control" placeholder="Adres.." type="text">
										</div>
									</fieldset>
									<div>
										<input class="btn btn-success" type="submit" value="Ekle" name="ekle">
									</div>
                  <?php
                      if(@$_POST["ekle"]){
                         $isim = mb_strtolower(@$_POST['isim']);
                         $link = @$_POST['link'];
                         $single = menuekle($isim,$link);
                         if($single > 0){
                           echo "ekleme başarılı";
                         }else{
                            echo "ekleme yapılamadı";
                         }
                    } ?>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
		  </div>
      <div class="col-md-10">
          <div class="row">
            <div class="col-md-6">
              <div class="content-box-large">
                <div class="panel-heading">
                  </div>
                <div class="panel-body">
                  <form action="menu.php" method="POST">
                    <div class="form-group">
                        <label for="sel1"></label>
                        <select name="id" class="form-control" id="sel1">
                          <option selected>Menü Seç</option>
                          <?php foreach(menu() as $menu) { ?>
                          <option value="<?php echo $menu['id'] ?>"><?php echo $menu['isim']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    <div>
  										<input class="btn btn-danger" type="submit" name="sil" value="Sil">
                      <?php
                        if(@$_POST["sil"]){
                             $id = @$_POST['id'];
                             $single = menusil($id);
                             if($single > 0){
                               echo "menü silindi";
                             }else{
                                echo "silme başarısız";
                             }
                        }  ?>
                </form>
                </div>
              </div>
            </div>
          </div>
      </div>
		</div>
    </div>
    <?php include "adminfooter.php"; } ?>
