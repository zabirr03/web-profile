

 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Add article
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=article"> article </a></li>
      <li class="active"> add </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/article/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="judul" id="judul" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Seo Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="field ini akan otomatis terisi ketika anda mengetikan judul. Tentu saja anda dapat mengeditnya" name="judul_seo" id="judul_seo" autocomplete="off" required>
                </div>
              </div>
             
              <br>
              <div class="form-group">
              <label class="col-sm-1 control-label">Isi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="ckeditor" name="isi" required></textarea>
                  </div>
                </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">File Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="file_image" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_article_id' class='form-control'>
                  <option value=0 selected>- Pilih Kategori -</option>";
                    $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_article ORDER BY name");
                    while($r=mysqli_fetch_assoc($tampil)){
                      echo "<option value=$r[category_article_id]>$r[name]</option>";
                    }                               
                       echo"</select>";
                      ?>
                  </div>
                  </div>

              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">author</label>
                <div class="col-sm-3">
                  <input type="text" readonly="" class="form-control" name="author" autocomplete="off" value="<?php echo $_SESSION['username']; ?>" required>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=article" class="btn btn-default btn-reset">Cancel</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel article
      $query = mysqli_query($mysqli, "SELECT * FROM is_article WHERE article_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data article : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change article
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=article"> Article </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/article/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="article_id" value="<?php echo $data['article_id']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Judul</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="judul" name="judul" autocomplete="off" value="<?php echo $data['judul']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Seo Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul_seo" placeholder="field ini akan otomatis terisi ketika anda mengetikan judul. Tentu saja anda dapat mengeditnya" name="judul_seo" id="judul_seo" autocomplete="off" value="<?php echo $data['judul_seo']; ?>" required>
                </div>
              </div>
             
              <br>
              <div class="form-group">
              <label class="col-sm-1 control-label">Isi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="ckeditor" name="isi" required>
                      <?php echo $data['isi']; ?>
                    </textarea>
                  </div>
                </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="file_image" autocomplete="off">
                  <br>
                  <img src="../images/article/<?php echo $data['file_image']; ?>" height="150">
                </div>
              </div>

            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_article_id' class='form-control'>";
                  $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_article ORDER BY name");
                  if ($data['is_category_article_id']==0){
                  echo "<option value=0 selected>- Pilih Kategori -</option>";
                  }                     
                                  while($w=mysqli_fetch_assoc($tampil)){
                  if ($data['is_category_article_id']==$w['category_article_id']){
                    echo "<option value=$w[category_article_id] selected>$w[name]</option>";
                  }
                  else{
                    echo "<option value=$w[category_article_id]>$w[name]</option>";
                  }
                  }
                  echo "<select>";         
                      ?>
                  </div>
                  </div>

                  <div class="form-group">
                <label class="col-sm-1 control-label">author</label>
                <div class="col-sm-3">
                  <input type="text" readonly="" class="form-control" name="author" autocomplete="off" value="<?php echo $_SESSION['username']; ?>" required>
                </div>
              </div>



            <!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=article" class="btn btn-default btn-reset">Cancel</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>