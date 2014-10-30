<div class="row pinguin">
    <!-- Grid bagian kiri | Kontainer utama -->
    
    <div class="left-container">
        <div class="left-modul forum-modul">
        <h4 class="title">Silakan pilih forum yang akan kamu ikuti</h4>
        <p class="wtsay">Di pinguin terdapat banyak kategori forum yang bisa kamu ikuti. Siapapun kamu, developer, network engiiner, bahkan jomblo, silakan berpartisipasi.</p>
        <a class="mau" href="<?php echo site_url('forum/write_thread');?>" >Tambahkan Thread</a>
<div class="container-table">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>Thread</th>
            <th>Posting</th>
            <th>Post terakhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($thread as $row){
          ?>
          <tr> <!-- Baris / row, kalo td nya kolom -->
            <td><a href="<?php echo site_url();?>forum/thread/<?php echo $row->id_thread;?>" class="kategori"><?php echo $row->title;?></a><br>
            </td>
            <td><?php echo $row->total_posting;?></td>
            <td>Oleh <a href="#user" class="user"><?php echo "dummyuser";?></a><br><span><?php echo $row->waktu_terakhir;?></span>
            </td>
          </tr>
          <?php
          }
          ?>  
        
            
        </tbody>
      </table>
      </div>
        </div>        

    </div>    
    
