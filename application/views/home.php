<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="left-container">
    <div class="left-modul thread-modul">
      <h4 class="title">Popular Thread</h4>
      <table class="table table-bordered">
        <tr>
          <td>Lab pinguin mendunia</td>
        </tr>
        <tr>
          <td>Kordas lama sudah berhasil dilengserkan</td>
        </tr>
        <tr>
          <td>Suka duka mengerjakan web pinguin</td>
        </tr>
        <tr>
          <td>Nonton Load off the ring bareng Isna Ngijal</td>
        </tr>
      </table>
    </div>

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