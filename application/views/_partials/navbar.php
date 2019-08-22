<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url()?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form action="" method="get" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <?php // echo form_open('main/search', '') ?>
      <div class="input-group">
        <input autocomplete="off" id="search" name="search" type="text" class="form-control input-lg" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      </div>
    <?php // echo form_close() ?>
    </form>
    
  </nav>