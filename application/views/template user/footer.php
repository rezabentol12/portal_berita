</div>
</div>
<footer class="sticky-footer bg-white">
  <div class="" style="background-color:#EEECEE; height: 300px;">
    <div class="col-md-12 pt-4"> 
      <div class="row justify-content-center"> 
       <?php foreach ($tampil->result() as $key) {?>
        <div class="col-lg-2">  
         <div class="card" style="width: 15rem;">
          <div class="card-body">
           <a href="  " > <p class="text-center"> <?php   echo $key->judul ?></p></a>
         </div>
       </div> 
     </div>
   <?php   } ?>
 </div>
</div>

</div>
</footer>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>
<script type="text/javascript">function add_chatinline(){var hccid=24550834;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>



</body>

</html>