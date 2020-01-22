
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top shadow">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">      
        </ul>
        <form class="form-inline mx-auto" action="<?php echo site_url('Welcome/search') ?>" method="GET" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width:500px;" name="keyword">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li ><button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
            Login
          </button></li>
          <li ><button type="button" class="btn " data-toggle="modal" data-target="#exampleModall">
            Register
          </button></li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-expand  topbar mb-4  " style="background-color: #0E4375">
      <ul class="navbar-nav mr-auto mx-auto ">

       <li><a class="btn  text-white mr-3" href="<?php echo site_url('Welcome') ?>" role="button" >Home</a></li>

       <div class="dropdown">
        <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('Welcome/nasional') ?>" >
         Nasional
       </a>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:#0E4375; ">
        <a class=" btn dropdown-item text-white" href="<?php  echo site_url ('Welcome/politik') ?>">Politik</a>
        <a class=" btn dropdown-item text-white" href="<?php  echo site_url ('Welcome/hk') ?>">Hukum & Kriminal</a>
        <a class=" btn dropdown-item text-white" href="<?php  echo site_url('Welcome/peristiwa') ?>">Peristiwa</a>
      </div>
    </div>
    <div class="dropdown">
      <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('Welcome/ekonomi') ?>" >
        Ekonomi
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
        <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/keuangan') ?>">Keuangan</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/energi') ?>">Energi</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/bisnis') ?>">Bisnis</a>
        <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/makro') ?>">Makro</a>
      </div>
    </div>
    <div class="dropdown">
      <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('Welcome/olahraga') ?>">
        Olahraga
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
       <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/sepakbola') ?>">SepakBola</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/motorgp') ?>">MotorGP</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/f1') ?>">F1</a>
       <a class="btn dropdown-item text-white" href="<?php echo site_url('Welcome/raket') ?>">Raket</a>
     </div>
   </div>
   <div class="dropdown">
    <a class="btn  dropdown-toggle text-white" href="<?php echo site_url('Welcome/teknologi') ?>">
     Teknologi
   </a>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"style="background-color:#0E4375;">
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('Welcome/ti') ?>">Teknologi Informasi</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('Welcome/sains') ?>">Sains</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('Welcome/telkomunikasi') ?>">Telekomunikasi</a>
    <a class="btn dropdown-item text-white" href="<?php   echo site_url('Welcome/otomotif') ?>">Otomotif</a>
  </div>
</div>



</ul>

</nav>
<div class="container-fluid">