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
    <div class="container">
      
      <div class="row">
      <?php
      $query=mysqli_query($mysqli,"SELECT * FROM is_category_materi");
      while($data=mysqli_fetch_assoc($query)){
       ?>
        <div class="col-sm-3 pad-10">
          <div class="card">
                             
                              <div class="card-content">
                                <a href="detail-view-<?php echo $data['category_materi_id']; ?>"><span class="card-title activator brand-text"><?php echo $data['name']; ?><i class="mdi-navigation-more-vert right"></i></span></a>
                          
                              </div>
                              
                            </div>

        </div>
         <?php }?>
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