<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('admin')?>"><?php echo SITE_NAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <?php echo form_open('main/search', 'class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"') ?>
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    <?php echo form_close() ?>
    
  </nav>