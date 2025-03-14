
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Home
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Home</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px;color: black;">
            <i class="icon fa fa-user"></i> Welcome <strong><?php echo $_SESSION['fullname']; ?></strong>
          </p>        
        </div>
      </div>
    </div>
     <div class="row">
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

               <?php
                $tam=mysqli_query($mysqli,"SELECT COUNT(*) AS JUMLAH FROM is_materi");
                   $r=mysqli_fetch_array($tam);
                      $tot=$r['JUMLAH']; { ?>
                   <h3 class="h3"><?php echo $tot; ?></h3>
                  <p class="p">File Materi</p>
               
                <?php 
              } ?>  
            </div>
            <div class="icon">
              <i class="ion-android-document"></i>
            </div>
            <a href="?module=materi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                $tam=mysqli_query($mysqli,"SELECT COUNT(*) AS JUMLAH FROM is_category_article");
                   $r=mysqli_fetch_array($tam);
                      $tot=$r['JUMLAH']; { ?>
                   <h3 class="h3"><?php echo $tot; ?></h3>
                  <p class="p">Category Article</p>
               
                <?php 
              } ?>  
            </div>
            <div class="icon">
              <i class="ion-ios-pricetags-outline"></i>
            </div>
            <a href="?module=category_article" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $tam=mysqli_query($mysqli,"SELECT COUNT(*) AS JUMLAH FROM is_portfolio");
                   $r=mysqli_fetch_array($tam);
                      $tot=$r['JUMLAH']; { ?>
                   <h3 class="h3"><?php echo $tot; ?></h3>
                  <p class="p">Portfolio</p>
               
                <?php 
              } ?>  
            </div>
            <div class="icon">
              <i class="ion-android-desktop"></i>
            </div>
            <a href="?module=portfolio" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $tam=mysqli_query($mysqli,"SELECT COUNT(*) AS JUMLAH FROM is_article");
                   $r=mysqli_fetch_array($tam);
                      $tot=$r['JUMLAH']; { ?>
                   <h3 class="h3"><?php echo $tot; ?></h3>
                  <p class="p">Article</p>
               
                <?php 
              } ?>  
            </div>
            <div class="icon">
              <i class="ion-compose"></i>
            </div>
            <a href="?module=article" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

            
              <div id="container2" class="col-md-6"></div> 
              <div class="col-md-6">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Article</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div style="display: block;" class="box-body">
              <ul class="products-list product-list-in-box">
              <?php 
              $query=mysqli_query($mysqli,"SELECT * FROM is_article ORDER BY tanggal DESC LIMIT 5");
              while ($data=mysqli_fetch_assoc($query)){
            
               ?>
                <li class="item">
                  <div class="product-img">
                    <img src="../images/article/<?php echo $data['file_image']; ?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="?module=form_article&form=edit&id=<?php echo $data['article_id']; ?>" class="product-title">
                    <?php echo $data['judul']; ?>
                      </a>
                        <span class="product-description">
                        <?php $isi= substr($data['isi'],0,100);
                        echo $isi."..";
                        ?>
                        </span>
                  </div>
                </li>
                <?php } ?>
                <!-- /.item -->
                
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div style="display: block;" class="box-footer text-center">
              <a href="?module=article" class="uppercase">View All Article</a>
            </div>
            <!-- /.box-footer -->
          </div>
                
              </div>     
            
        

    </div>

    
    




  </section><!-- /.content -->