<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color: #0E4375;">
        <h5 class="modal-title text-white" id="exampleModalLabel" >LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">registrasi</h1>
            </div>
            <form method="post" action="<?php echo site_url('Auth/login') ?>" class="user">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" name="username" placeholder="username">
                <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user"name="password" placeholder="password">
                <?php echo form_error('password','<div class="text-danger small ml-2">','</div>') ?>
              </div>
            </div>
          </div>
        </div>


        <div class="modal-footer"style="background-color: #0E4375;">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">login</button>
        </div>
      </form>
    </div>
  </div>
</div>