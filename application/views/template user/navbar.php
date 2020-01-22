
<style type="text/css">
.btn:hover{
  background-color: #0B3053;

}
.dropdown:hover .dropdown-menu{
  display: block;
}


</style>
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top shadow  fixed-top" style="height: 90px;" >
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">      
        </ul>
        <form class="form-inline mx-auto" action="<?php echo site_url('user/User/search') ?>" method="GET" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:500px;" name="keyword">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php if ($this->session->userdata('username')) { ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $this->session->userdata('username') ?></span>
                <i class="fas fa-user-alt"></i>
              
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url("Auth/Logout");?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-expand  topbar mb-4  " style="background-color: #0E4375; margin-top: 100px;">
      <ul class="navbar-nav mr-auto mx-auto ">

       <li><a class="btn  text-white mr-3" href="<?php echo site_url('user/User') ?>" role="button" >Home</a></li>

       <div class="dropdown">
        <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('user/User/nasional') ?>" >
         Nasional
       </a>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:#0E4375; ">
        <a class=" btn dropdown-item text-white" href="<?php echo site_url('user/User/politik') ?>">Politik</a>
        <a class=" btn dropdown-item text-white" href="<?php echo site_url('user/User/hk') ?>">Hukum & Kriminal</a>
        <a class=" btn dropdown-item text-white" href="<?php echo site_url('user/User/peristiwa') ?>">Peristiwa</a>
      </div>
    </div>
    <div class="dropdown">
      <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('user/User/ekonomi') ?>" >
        Ekonomi
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
        <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/keuangan') ?>">Keuangan</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/energi') ?>">Energi</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/bisnis') ?>">Bisnis</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/makro') ?>">Makro</a>
      </div>
    </div>
    <div class="dropdown">
      <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('user/User/olahraga') ?>">
        Olahraga
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
       <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/sepakbola') ?>">SepakBola</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/motorgp') ?>">MotorGP</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/f1') ?>">F1</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('user/user/raket') ?>">Raket</a>
     </div>
   </div>
   <div class="dropdown">
    <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('user/User/teknologi') ?>">
     Teknologi
   </a>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('user/User/ti') ?>">Teknologi Informasi</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('user/User/sains') ?>">Sains</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('user/User/telkomunikasi') ?>">Telekomunikasi</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('user/User/otomotif') ?>">Otomotif</a>
  </div>
</div>





</ul>

</nav>
<div class="container-fluid">