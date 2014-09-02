<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pinguin - <?php echo $title ?></title>

    <!-- CSS Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- buat favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon-pinguin.ico" >
    <link rel="icon" type="/image/ico"  href="<?php echo base_url();?>assets/img/favicon-pinguin.ico" >
    
    <!-- end -->
  </head>

  <body>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    
    <!-- Hiasan warna-warna paling atas -->
      
    <div class="top-color">
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
      
    <!-- Navigasi atas -->  
        
    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      
    <!-- Brand and toggle get grouped for better mobile display -->
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>">Pinguin</a>
    </div>

    <!-- Membuat link-link berubah dari float-left menjadi vertikal teratur -->
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('forum'); ?>">Forum</a></li>
        <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
        <li><a href="<?php echo site_url('download'); ?>">Download</a></li>
        <li><a href="<?php echo site_url('contacts'); ?>">Kontak</a></li>
        <li><form class="search-container" action="#" method="POST"><input type="search" class="form-control search" placeholder="Cari..." >
            <input type="submit" class="btn btn-search" value="Cari">
            </form>
        </li>
          </ul>
    </div>  <!-- /.navbar-collapse -->
  </div>  <!-- /.container-fluid -->
</nav>