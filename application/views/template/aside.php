  <div id="nav-right">
  <div class="right-container">
    <!-- Grid satuan -->

    <?php if( ! $this->session->userdata('isLogin')){ ?>
    <div class="right-modul come-in login-modul">
      <p class="member">
        Ini adalah kolom yang kamu gunakan untuk login dan register user baru.
        <br><hr class="garis-masuk">
        <div class="container-mau">
            <a class="mau" href="<?php echo site_url('account/login'); ?>">Login</a><span> atau</span>
            <a class="mau" href="<?php echo site_url('account/register'); ?>">Sign up</a>
        </div>
      </p>
      <hr class="garis-masuk2"><p class="member">Bergabunglah dengan Pinguin, kamu bisa belajar, download, dan ikut serta di forum yang ada di Pinguin.</p>  
    </div>
    <?php }else{ ?>

    <div class="right-modul come-in login-modul on">
      <div class="image-profile pull-left">
        <img class="user-photo" src="<?php echo base_url() ?>assets/img/balapa.jpg" title="dummy" >
      </div>
      <div class="profile-detail pull-left">
        <ul class="profile">
          <li><?php echo $this->session->userdata('fullname'); ?></li>
          <li><?php echo $this->session->userdata('username'); ?></li>
          <li><?php echo $this->session->userdata('email'); ?></li>
        </ul>
      </div>
      <div class="user-choice">
        <a href="<?php echo site_url('account/profile'); ?>">Sunting profil</a>&nbsp; <span class="bull">&bull;</span>&nbsp;
        <a id="logout" href="#">Keluar</a>
      </div>
    </div>
    <?php } ?>

    <div class="right-modul topik-modul">
        <ul class=topik>
            <li><a class="tag" href="#"> &nbsp;&nbsp;&nbsp;&nbsp;Web design</a></li>
            <li><a class="tag" href="#">&nbsp;&nbsp;&nbsp;&nbsp;Web developement</a></li>
            <li><a class="tag" href="#">&nbsp;&nbsp;&nbsp;&nbsp;Framework</a></li>
            <li><a class="tag" href="#">&nbsp;&nbsp;&nbsp;&nbsp;Packet tracer</a></li>
            <li><a class="tag" href="#">&nbsp;&nbsp;&nbsp;&nbsp;Linux</a></li>
            <li><a class="tag" href="#">&nbsp;&nbsp;&nbsp;&nbsp;Back track</a></li>
        </ul>
    </div>
  </div>
  </div>    

</div>