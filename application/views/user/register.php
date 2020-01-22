<div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#0E4375;">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">

            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">registrasi</h1>
                </div>
                <form class="user"  method="post" action="<?php echo site_url('registrasi/index') ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="nama anda" name="nama">
                    <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="username anda" name="username">
                    <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                      <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="ulangi password" name="password_2">

                    </div>
                  </div>
                 <!--  <button type="submit" class="btn btn-success btn-user btn-block">buat akun</button>  -->
                <hr>
                <div class="text-center">
                  <a class="small text-success" href="<?php echo site_url('auth/login') ?>">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer"style="background-color: #0E4375;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>