<?php
session_start();
if($_SESSION['url'] !== 1){
	header("Location:../girindex.php");
} else {
include "adminheader.php";
?>

      <div class="col-md-10">
         <div class="content-box-large">
           <div class="panel-heading">
           <div class="panel-title"><h2>Yeni Gönderi</h2></div>
           <br></br>
           <div class="panel-heading">
             </div>
           <div class="col-md-10">
             <form action="" method="post">
             <fieldset>
               <div class="form-group">
                 <label><h6>Gönderi Başlık</h6></label>
                 <input name="baslik" class="form-control" placeholder="Başlık.." type="text">
               </div>
             </fieldset>
           </div>
         </div>
           <div class="panel-body">
             <label><h6>Gönderi İçerik</h6></label>
             <textarea name="icerik" id="ckeditor_full"></textarea>
          <div class="col-md-2">
           <div class="form-group">
               <label for="sel1"></label>
               <select name="kategoriid" class="form-control" id="sel1">
                 <?php foreach(adminkategori() as $kategori) { ?>
                 <option value="<?php echo $kategori['id'] ?>"><?php echo $kategori['isim']; ?></option>
                 <?php } ?>
               </select>
             </div>
           </div>
            <div class="col-md-2">
             <div class="form-group">
                 <label for="sel1"></label>
                 <select  name="etiketid" class="form-control" id="sel1">
                   <?php foreach(adminetiket() as $etiket) { ?>
                   <option value="<?php echo $etiket['id'] ?>"><?php echo $etiket['isim']; ?></option>
                   <?php } ?>
                 </select>
               </div>
              </div>
             <div class="col-md-2">
              <div class="form-group">
                  <label for="sel1"></label>
                  <select  name="kullaniciid" class="form-control" id="sel1">
                    <?php foreach(kullanici() as $kullanici) { ?>
                    <option value="<?php echo $kullanici['id'] ?>"><?php echo htmlspecialchars($kullanici['isim']); ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
					 <div class="form-group">
							<input type="submit" name="" value="Ekle" class="btn btn-success" style="margin-top:16px">
						</div>
					</div>
          </div>
              <?php
                  if($_POST){
                     $baslik = (@$_POST['baslik']);
                     $icerik = (@$_POST['icerik']);
                     $kategori = @$_POST['kategoriid'];
                     $etiket = @$_POST['etiketid'];
                     $kullanici =@$_POST['kullaniciid'];
                     $single = gonderiekle($baslik,$icerik,$kategori,$etiket,$kullanici);
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
    <?php include "adminfooter.php"; } ?>
     <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="vendors/ckeditor/ckeditor.js"></script>
    <script src="vendors/ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>
  </body>
</html>
