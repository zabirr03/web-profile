

 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Add Portfolio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=portfolio"> Portfolio </a></li>
      <li class="active"> Add </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/portfolio/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title" autocomplete="off" required>
                </div>
              </div>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_portfolio_id' class='form-control'>
                  <option value=0 selected>- Pilih Kategori -</option>";
                    $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_portfolio ORDER BY name");
                    while($r=mysqli_fetch_assoc($tampil)){
                      echo "<option value=$r[category_portfolio_id]>$r[name]</option>";
                    }                               
                       echo"</select>";
                      ?>
                  </div>
                  </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=portfolio" class="btn btn-default btn-reset">Cancel</a>
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
      // fungsi query untuk menampilkan data dari tabel portfolio
      $query = mysqli_query($mysqli, "SELECT * FROM is_portfolio WHERE portfolio_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data portfolio : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change Portfolio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=portfolio"> Portfolio </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/portfolio/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="portfolio_id" value="<?php echo $data['portfolio_id']; ?>">

              <div class="form-group">
                <label class="col-sm-1 control-label">Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title" autocomplete="off" value="<?php echo $data['title']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/portfolio/<?php echo $data['image']; ?>" height="150">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_portfolio_id' class='form-control'>";
                  $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_portfolio ORDER BY name");
                  if ($data['is_category_portfolio_id']==0){
                  echo "<option value=0 selected>- Pilih Kategori -</option>";
                  }                     
                                  while($w=mysqli_fetch_assoc($tampil)){
                  if ($data['is_category_portfolio_id']==$w['category_portfolio_id']){
                    echo "<option value=$w[category_portfolio_id] selected>$w[name]</option>";
                  }
                  else{
                    echo "<option value=$w[category_portfolio_id]>$w[name]</option>";
                  }
                  }
                  echo "<select>";         
                      ?>
                  </div>
                  </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=portfolio" class="btn btn-default btn-reset">Cancel</a>
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