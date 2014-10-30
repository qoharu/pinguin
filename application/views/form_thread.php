<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pinguin - Sebuah website laboratorium CNC</title>

    <!-- CSS Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- buat favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon-pinguin.ico" >
    <link rel="icon" type="/image/ico"  href="<?php echo base_url()?>assets/img/favicon-pinguin.ico" >
    
    <!--editor-->
  
      

    <!-- end -->
  </head>

  <body>
      
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
      <a class="navbar-brand" href="index.html">Pinguin</a>
    </div>

    <!-- Membuat link-link berubah dari float-left menjadi vertikal teratur -->
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="forum.html">Forum</a></li>
        <li><a href="#">Belajar</a></li>
        <li><a href="download.html">Download</a></li>
        <li><a href="#">Kontak</a></li>
        <li><form class="search-container" action="#" method="POST"><input type="search" class="form-control search" placeholder="Cari..." >
            <input type="submit" class="btn btn-search" value="Cari">
            </form>
        </li>
          </ul>
    </div>  <!-- /.navbar-collapse -->
  </div>  <!-- /.container-fluid -->
</nav>

<!-- Grid menu -->

<!-- Container grid -->

<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="container">
     <a href="#" class="button-slide">
        <i class="glyphicon glyphicon-pencil detail"></i>
        <div class="detail-wrap"></span> Create New Thread</div>
      </a>
    <div class="center-modul posting-modul posting">
      <?php 
                            print_r ($cat); 
                          
                          ?>
        <!-- Form --> 
               <form class="form-horizontal" role="form" action="<?php echo site_url('forum/posting');?>" method="POST">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Select Forum <i class="star">*</i></label>
                  <div class="col-sm-6">
                    <select class="form-control" name="select_category">
                         <?php 
                          foreach ($cat as $key => $value) {
                            echo "<option value='$key'>$value->category</option>";
                          }
                         ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Title
                    <i class="star">*</i></label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="" placeholder="Masukkan Judul" name="title">
            
                  </div>
                </div>

                  <div class="form-group">
                     <label for="" class="col-sm-2 control-label">Body <i class="star">*</i></label>
                     <div class="col-sm-7">
                         <textarea class="ckeditor" id="editor1" name="thread">

                         </textarea>
                      </div>
                    </div>
                    <!--
                    <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Upload Image</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control" id="">
                  </div>
                </div>

              --> 


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Post</button>

                    <button type="submit" class="btn btn-default preview">Preview Post</button>
                  </div>
                </div>
              </form>


   
    
<!-- Grid bagian kanan | Kontainer utama -->    
  <div class="nav-right"></div>    

</div>
    <!-- Container grid ends! -->

  <!-- Final Footer Page -->
  <script src="<?php echo base_url()?>assets/js/jquery.js"></script>        
  <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url()?>assets/js/ckeditor/ckeditor.js"></script>

      <!--
  <script src="js/prefixfree.min.js"></script>
         
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <script src="<?php echo base_url()?>assets/js/html5shiv.js"></script>
  <script src="<?php echo base_url()?>assets/js/respond.min.js"></script>
      
</body>
</html>