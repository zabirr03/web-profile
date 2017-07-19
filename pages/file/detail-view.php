<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text blog-single-banner">
            <div class="col-md-12">
              <h2 class="title">FILE MATERI</h2>
             
             
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
    <div class="row">
      <div class="container">
      <?php
      $query=mysqli_query($mysqli,"SELECT * FROM is_materi WHERE is_category_materi_id=$_GET[id]");
      if(mysqli_num_rows($query)<1){
        ?>
        <div class="col-sm-12 pad-10">
          <div class="card">
                             
                              <div class="card-content">
                                <a href="#"><span class="card-title activator brand-text">
                                <h2 align="center">DATA KOSONG</h2>
                                </span></a>
                          
                              </div>
                              
                            </div>

        </div>
        <br>
         <br>
          <br>
           <br>
           
            <br>
             <br>
              <br>
               <br>
                <br>
        <?php
      }else {


      while($data=mysqli_fetch_assoc($query)){
       ?>
      <div class="col-sm-3 pad-10">

      <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top"><?php echo tgl_indo($data['tanggal']); ?></h2>
                                <div class="valign-wrapper card-img-wrap">

                                <?php
                                if (!empty($data['nama_file'])){
             $pecah = explode(".", $data['nama_file']);
             $ekstensi = $pecah[1];
             if ($ekstensi == 'zip'){
                 echo "<img src='admin/images/zip.png' class='activator'>";
             }
             elseif ($ekstensi == 'rar'){
                 echo "<img src='admin/images/rar.png'  class='activator'>";
             }
             elseif ($ekstensi == 'doc'){
                 echo "<img src='admin/images/doc.png'  class='activator'>";
             }
             elseif ($ekstensi == 'pdf'){
                 echo "<img src='admin/images/pdf.png'  class='activator'>";
             }
             elseif ($ekstensi == 'ppt'){
                 echo "<img src='admin/images/ppt.png'  class='activator'>";
             }
             elseif ($ekstensi == 'pptx'){
                 echo "<img src='admin/images/pptx.png'  class='activator'>";
             }
             elseif ($ekstensi == 'docx'){
                 echo "<img src='admin/images/doc.png'  class='activator'>";
             }
             }else{
                 echo "<img src='admin/images/kosong.png'  class='activator'>";
             } 

                                ?>
                              
                                </div>
                              </div>
                              <div class="card-content">
                                <a href="materi/<?php echo $data['nama_file'] ?>" target="_blank" download><span class="card-title activator brand-text"><?php echo $data['nama_file']; ?><i class="mdi-file-cloud-download"></i></span></a>
                                <p>By <?php echo $data['author']; ?></p>
                              </div>
                              
                            </div>
        
      </div>
      <?php } 

}
      ?>




        
      </div>
      
    </div>
    <div class="row">
    <div class="container">
    <div class="col-md-12">
    <p align="right"><a href="file" class="btn waves-effect waves-light btn-large brand-bg white-text regular-text">Back <i class="mdi-navigation-arrow-back left"></i>
                    </a>
                    </p>
      
    </div>
      
    </div>
      
    </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>