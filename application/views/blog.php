<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="left-container">

  <?php foreach ($blog as $artikel) { ?>
    <div class="left-modul info-modul">
      <h4 class="title"><?php echo $artikel->post_title; ?></h4>
      <span class="date"><i class="glyphicon glyphicon-time"></i> &nbsp;<?php echo $artikel->post_date; ?> &nbsp; &bull; &nbsp;</span>
      <span class="comment"><i class="glyphicon glyphicon-comment"></i> <?php echo $artikel->comment_count; ?> &nbsp;&bull;</span>
      <span class="comment"> &nbsp;Posted by <?php echo $artikel->user_login; ?></span>
      <br><hr>
      <p class="wtsay"><?php echo $parsedown->text(substr($artikel->post_content, 0,500))."..."; ?></p>
      <a href="
        <?php 
          echo site_url('blog/article')
          .'/'.$artikel->id
          .'/'.$artikel->post_name
        ; ?>
      " class="button-slide">
        <i class="glyphicon glyphicon-chevron-right detail"></i>
        <div class="detail-wrap">Selengkapnya</div>
      </a>
    </div>
  <?php } ?>
    
        

  </div>    
    
<!-- Grid bagian kanan | Kontainer utama -->