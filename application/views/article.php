<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="left-container">

    <div class="left-modul info-modul">
      <h4 class="title"><?php echo $post_title; ?></h4>
      <span class="date"><i class="glyphicon glyphicon-time"></i> &nbsp;<?php echo $post_date; ?> &nbsp; &bull; &nbsp;</span>
      <span class="comment"><i class="glyphicon glyphicon-comment"></i> <?php echo $comment_count; ?> &nbsp;&bull;</span>
      <span class="comment"> &nbsp;Posted by <?php echo $user_login; ?></span>
      <br><hr>
      <p class="wtsay"><?php echo $parsedown->text($post_content); ?></p>
    </div>
    
        

  </div>    
    
<!-- Grid bagian kanan | Kontainer utama -->