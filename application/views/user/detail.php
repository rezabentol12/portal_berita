   <style type="text/css">

 </style>

 <!-- menu horizontal -->
 <div class="container-fluid " style="background-color:#EEECEE">
  <div class="row">
   <div > <?php echo $this->session->flashdata('pesan') ?></div>
   <div class="col-lg-12 mb-4 mt-4 px-4">
    <div class="row -flex flex-row">
     <?php foreach ($tampil->result() as $key) {?>
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-2 mb-3">
       <div class=" card shadow ">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $key->foto ?>" class="card-img-top " height="250px" width="100px">
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
<!-- end horizontal -->

<!-- menu vertikal -->
<div class="container-fluid mt-3 ">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-body">
          <?php foreach ($vertical->result() as $key) { ?>
           <h1 class="text-center" style="color:  #0E4375;"><?php echo $key->judul ?></h1>
           <h2 class="text-center" style="color: black;"><?php echo $key->nama_uploder ?></h2>
           <h3 class="text-center"><?php echo $key->tgl_upload ?></h2>
             <div class="text-center"><img src="<?php echo base_url() ?>assets/img/<?php echo $key->foto ?> " height="300px" height="300px" ></div>
             <div style="text-align: justify;"><p><?php echo $key->descripsi ?></p></div>
           <?php } ?>
         </div>
       </div>
       <!-- end vertical -->

       <!-- komentar -->
       <div>
        <?php foreach ($tampil->result() as $key) {?>
          <a href="  " > <p class="text-center  btn btn-sm" style="background-color: #EEECEE;"> <?php   echo $key->judul ?></p></a>
        <?php   } ?>
      </div>
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url('user/User/komentar/') ?>" method="POST">
            <div class="form-group">
              <?php foreach ($vertical->result() as $key) {?>
                <input type="hidden" name="id" value="<?php echo $key->id ?>"> 
              <?php } ?>
              <?php if ($this->session->userdata('username')) { ?>       
                <input type="hidden" name="username" value="<?php echo $this->session->userdata('username')?>"> 
              <?php } ?>
              <h3 class="text-center">kolom komentar</h3>
              <textarea class="form-control" placeholder="komentar" name="komentar"></textarea>
              <button class="btn btn-primary btn-sm mt-2">komentar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
   <!--  end komentar -->

 <!-- berta terbaru -->
    <div class="col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center" style="color:  #0E4375;">Berita Terbaru</h6>
        </div>
        <div class="card-body"  style="background-color:#EEECEE">
          <?php foreach ($terbaru->result() as $kay ) {
            ?>
            <div class="card mx-auto shadow" style="width: 15rem; ">
              <img src="<?php echo base_url() ?>assets/img/<?php echo $kay->foto ?>" class="card-img-top" height="200px;" width="90px;">
              <div class="card-body">
                <a href="<?php echo site_url("user/User/detail/$kay->id") ?>" style="color:black;"><p><?php echo $kay->judul ?></p></a>
              </div>
            </div>
          <?php   } ?>
          <?php foreach ($terbaru_n->result() as $kuy) {
            ?>
            <div class="card shadow mt-3">
              <div class="card-body"> 

               <div class="row">
                 <div class="col-md-4">
                  <div>
                   <img src="<?php echo base_url(); ?>assets/img/<?php echo $kuy->foto ?>" class="card-img-top" height="90px" width="90px">
                 </div>
               </div>
               <div class="col-md-4"> 
                 <a href="<?php echo site_url("user/User/detail/$kuy->id") ?>" style="color:black;"><p><?php echo $kuy->judul ?></p></a>
               </div>
             </div>
           </div>
         </div>
       <?php } ?>
     </div>
   </div>
  <!--  end berita terbaru -->


   <div class="card shadow mb-4">
    <div class="card-header py-3"  style="background-color: #0E4375">
      <h6 class="m-0 font-weight-bold text-white text-center">Tepopuler</h6>
    </div>
    <div class="card-body ">
      <?php $no=1; foreach ($hits->result() as $key ) {
        ?>
        <table>
         <tr> 
          <td > <a href="#"style="color:#0E4375; font-size: 25px;">#<?php  echo $key->judul;  ?></a></td>

        </tr>
      </table>
      <?php $no++;  } ?>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold  text-center" style="color:  #0E4375;">Komentar</h6>
    </div>

    <div class="card-body ">
      <?php $no=1; foreach ($muncul->result() as $key ) {
        ?>
        <table>
         <tr>
           <div class="card shadow">
            <tr>
              <td><a href="#"style="color:#0E4375; font-size: 10px;"><i class="fas fa-user"></i>
                <?php  echo $key->id_user;  ?></a></td>
                <td><a href="#"style="color:#0E4375; font-size: 10px;"><i class="fas fa-clock"></i>
                  <?php  echo $key->tgl_komen;  ?></a></td>
                </tr>
                <td > <a href="#"style="color:#0E4375; font-size: 25px;"><?php  echo $key->komentar;  ?></a></td>
                <tr>
                  <td>

                    <div class="dropdownnn">
                      <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        balas
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                       <form action="<?php  echo site_url('user/User/balas') ?>" method="POST">
                        <?php foreach ($vertical->result() as $kUy) {?>
                          <input type="hidden" name="id" value="<?php echo $kUy->id ?>"> 
                        <?php } ?>

                        <?php if ($this->session->userdata('username')) { ?>       
                          <input type="hidden" name="nama_komentar" value="<?php echo $this->session->userdata('username')?>"> 
                        <?php } ?>
                        <input type="hidden" name="id_komen" value="<?php echo $key->id ?>">

                        <textarea class="form-control" name="komentar" style="width: 300px; height: 100px;"></textarea>
                        <button class="btn btn-primary btn-sm" type="submit">pos</button>
                      </form>

                    </div>
                  </div>
                </td> 
                <td> 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink<?php  echo $key->id ?>">
                    <?php $count = 0 ?>
                    <?php  foreach ($komentar->result() as $balas) { ?>
                      <?php 
                      if($balas->id_komentar == $key->id){
                        $count ++;
                        ?>
                        <div class="card" style="width: 400px;">
                          <p><i class="fas fa-user"></i>
                            <?php echo $balas->nama_komentar; ?></p>
                            <p><?php echo $balas->komentar; ?> </p>
                          </div>
                        <?php } ?>


                      <?php   } ?>

                    </div>
                    <a class="" href="#" role="button" id="dropdownMenuLink<?php  echo $key->id ?>" data-toggle="dropdown">
                      balasan orang <?php echo $count?></a>
                    </td>
                  </tr>         
                </div>

              </tr>
            </table>
            <?php $no++;  } ?>
          </div>

        </div>

      </div>
    </div>









    <!-- End of Main Content -->


