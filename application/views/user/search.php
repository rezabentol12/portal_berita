 <div class="container-fluid " style="background-color:#EEECEE">
      <div class="row">
      <div class="col-lg-12 mb-4 mt-4 px-4">
        <div class="row -flex flex-row">
         <?php foreach ( $lits->result() as $key) {?>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-2 mb-3">
           <div class=" card shadow ">
            <img src="<?php echo base_url(); ?>assets/img/<?php echo $key->foto ?>" class="card-img-top" height="250px" width="100px">
            <div class="card-body">
             <a href="<?php echo site_url("user/User/detail/$key->id") ?>"><p class="card-text"><?php echo $key->judul?></p></a>
           </div>
         </div>
       </div>
     <?php } ?>
   </div>
 </div>
</div>
</div>