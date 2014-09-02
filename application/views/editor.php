<div class="affix">
  <form action="<?php echo site_url('admin/post_blog') ?>" method="POST" >
    <input type="text" name="title" id="nulis-title" placeholder="Title" >
  	<textarea name="isi" class="nulis form-control" rows="20" ></textarea>
    <input type="submit" value="Post!" class="btn btn-primary nulis-button">	
  </form>
</div>


<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="left-container">
    <div class="left-modul thread-modul">
      <h4 class="title">Title</h4>
      <span class="date"><i class="glyphicon glyphicon-time"></i> &nbsp;28 Februari, 2014 &nbsp; &bull; &nbsp;</span>
      <span class="comment"><i class="glyphicon glyphicon-comment"></i> 0 &nbsp;&bull;</span>
      <span class="comment"> &nbsp;Posted by <?php echo $this->session->userdata('username');?></span>
      <br><hr>
      <p class="wtsay diparse"></p>
    </div>
</div>