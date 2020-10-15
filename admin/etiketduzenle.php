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
			  					<form action="etiketduzenle.php" method="POST">
									<fieldset>
										<div class="form-group">
											<label>Etiket Ekle</label>
											<input name="isim" class="form-control" placeholder="Etiket.." type="text">
										</div>
									</fieldset>
                  <div>
										<input class="btn btn-success" type="submit" value="Ekle" name="ekle">
									</div>
                  <?php
                      if(@$_POST["ekle"]){
                         $isim = mb_strtolower(@$_POST['isim']);
                         $single = etiketekle($isim);
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
                  <form action="etiketduzenle.php" method="POST">
                    <div class="form-group">
                        <label for="sel1"></label>
                        <select  name="id" class="form-control" id="sel1">
                          <option selected>Etiket Seç</option>
                          <?php foreach(adminetiket() as $etiket) { ?>
                          <option value="<?php echo $etiket['id'] ?>"><?php echo $etiket['isim']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    <div>
											<input class="btn btn-danger" type="submit" name="sil" value="Sil">
                      <?php
                        if(@$_POST["sil"]){
                             $id = @$_POST['id'];
                             $single = etiketsil($id);
                             if($single > 0){
                               echo "etiket silindi";
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
    </div>
    <?php include "adminfooter.php"; } ?>
