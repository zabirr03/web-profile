<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix blog-banner-text blog-single-banner">
            <div class="col-md-12">
            <?php
            $query=mysqli_query($mysqli,"SELECT * FROM is_article a ,is_category_article b WHERE a.is_category_article_id=b.category_article_id  AND a.article_id=$_GET[id]");
            while($data=mysqli_fetch_assoc($query)){
            ?>
              <h2 class="title"><?php echo $data['judul']; ?></h2>
              <ul class="clearfix blog-post-meta">
                <li>By <a href="#"><?php echo $data['author']; ?></a>
                </li>
                <li><?php echo tgl_indo($data['tanggal']); ?></li>
                
                <li><a href="#"><?php echo $data['name']; ?></a>
                </li>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section> 
<section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix all-blog-post blog-inner with-sidebar">

          <?php
            $query=mysqli_query($mysqli,"SELECT * FROM is_article a ,is_category_article b WHERE a.is_category_article_id=b.category_article_id  AND a.article_id=$_GET[id]");
            while($data=mysqli_fetch_assoc($query)){
            ?>
            <div class="col-sm-8">
              <article class="single-post-page">
                <div class="thumb-wrap">
                  <img src="images/article/<?php echo $data['file_image']; ?>" alt="">
                </div>
                <div class="single-post-content">
                <?php echo $data['isi'];?>
                  
                </div>
                <div class="clearfix post-footer">
                  <a href="#" class="left post-like js-favorite" title="Love this"><i class="mdi-action-favorite"></i> <span class="numb">109</span></a>
                  <ul class="clearfix right share-post">
                    <li><a href="#"><i class="fa fa-facebook"></i> <span>SHARE</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> <span>TWEET</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i> <span>PLUS</span></a>
                    </li>
                  </ul>
                </div>
              </article>
            </div>
            <?php } ?>
             <!-- ./post container end-->

            
            <div class="col-sm-4">
              <div class="primary-sidebar">
                <aside class="single-widget">
                  <h2 class="widget-title">RECENT POSTS</h2>
                  <ul>
                  <?php
            $query=mysqli_query($mysqli,"SELECT * FROM is_article ORDER BY tanggal DESC");
            while($data=mysqli_fetch_assoc($query)){
            ?>
                    <li>
                      <a href="blog-single-<?php echo $data['article_id']; ?>"><?php echo $data['judul']; ?></a>
                      <span><?php echo  tgl_indo($data['tanggal']); ?></span>
                    </li>
                    <?php } ?>
                  </ul>
                </aside>  
                <aside class="single-widget">
                  <h2 class="widget-title">TAGS</h2>
                  <div class="widget-text">
                  <?php
            $query=mysqli_query($mysqli,"SELECT * FROM is_category_article");
            while($data=mysqli_fetch_assoc($query)){
            ?>
                    <a href="blog-category-<?php echo $data['category_article_id'] ?>" class="tags"><?php echo $data['name']; ?></a>
                   <?php } ?>
                  </div>
                </aside>
              </div>
            </div> <!-- ./sidebar end-->
          </div>
        </div>
      </div> <!-- ./container end-->
    </section> 