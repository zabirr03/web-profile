

 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Add Materi
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=materi"> Materi </a></li>
      <li class="active"> Add </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-10">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/materi/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">File</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="file_materi" autocomplete="off" required>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_materi_id' class='form-control'>
                  <option value=0 selected>- Pilih Kategori -</option>";
                    $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_materi ORDER BY name");
                    while($r=mysqli_fetch_assoc($tampil)){
                      echo "<option value=$r[category_materi_id]>$r[name]</option>";
                    }                               
                       echo"</select>";
                      ?>
                  </div>
                  </div>
                <div class="form-group">
                <label class="col-sm-1 control-label">Author</label>
                <div class="col-sm-3">
                  <input type="text" readonly="" value="<?php  echo $_SESSION['username']; ?>" class="form-control" name="author" autocomplete="off" required>
                </div>
              </div>
              



            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=materi" class="btn btn-default btn-reset">Cancel</a>
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
      // fungsi query untuk menampilkan data dari tabel materi
      $query = mysqli_query($mysqli, "SELECT * FROM is_materi WHERE materi_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data materi : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change Materi
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=materi"> Materi </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-10">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/materi/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="materi_id" value="<?php echo $data['materi_id']; ?>">

              

              

              <div class="form-group">
                <label class="col-sm-1 control-label">File</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="file_materi" autocomplete="off">
                  <br>
                  
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-1 control-label">Category</label>
                <div class="col-sm-8">
              <?php
              echo"
              <select name='is_category_materi_id' class='form-control'>";
                  $tampil=mysqli_query($mysqli,"SELECT * FROM is_category_materi ORDER BY name");
                  if ($data['is_category_materi_id']==0){
                  echo "<option value=0 selected>- Pilih Kategori -</option>";
                  }                     
                                  while($w=mysqli_fetch_assoc($tampil)){
                  if ($data['is_category_materi_id']==$w['category_materi_id']){
                    echo "<option value=$w[category_materi_id] selected>$w[name]</option>";
                  }
                  else{
                    echo "<option value=$w[category_materi_id]>$w[name]</option>";
                  }
                  }
                  echo "<select>";         
                      ?>
                  </div>
                  </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Author</label>
                <div class="col-sm-3">
                  <input type="text" readonly="" class="form-control" name="title" autocomplete="off" value="<?php echo $_SESSION['username']; ?>" required>
                </div>
              </div>



            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=materi" class="btn btn-default btn-reset">Cancel</a>
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