<section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text">
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h2 class="title">BLOG</h2>
              <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
        
          <div id="blog-posts" class="clearfix all-blog-post blog-inner without-sidebar">
          <?php 
        $query=mysqli_query($mysqli,"SELECT * FROM is_article a ,is_category_article b WHERE a.is_category_article_id=b.category_article_id  LIMIT 9");
      while($data=mysqli_fetch_assoc($query)){
        ?>
            <article class="col-sm-4 single-card-box single-post">
              <div class="card">
                <div class="card-image">
                  <div class="card-img-wrap">
                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                      <a href="blog-single-<?php echo $data['article_id']; ?>"><img class="activator" src="images/article/<?php echo $data['file_image']; ?>" alt="">
                      </a>
                    </div>
                    <div class="post-body">
                      <a href="blog-single-<?php echo $data['article_id']; ?>" class="post-title-link brand-text"><h2 class="post-title"><?php echo $data['judul'];?></h2></a>
                      <?php
                            echo "<p class='post-content'>".substr($data['isi'],0,300).'</p>';
                             ?>
                    </div>
                  </div>
                </div>
                <div class="clearfix card-content">
                  <a href="#" class="left js-favorite" title="Love this"><i class="fa fa-tags"></i><span class="numb"><?php echo $data['name']; ?></span></a>
                  <a href="blog-single-<?php echo $data['article_id']; ?>" class="brand-text right waves-effect">read more</a>
                </div>
              </div>
            </article> 

            <?php 
          }
            ?>
            
            
          </div>
        </div>
      </div><!--./container end-->
    </section>