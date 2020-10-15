<?php include "adminheader.php"; ?>

<?php if (isset($_GET['id'])) {
  $single = @icer($_GET['id']);
} ?>
<div class="col-md-10">
  <div class="content-box-large">
     <div class="panel-body">
       <label><?php echo $single['icerik'] ?></label>
     </div>
  </div>
</div>


<?php include "adminfooter.php"; ?>
