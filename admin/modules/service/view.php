<?php
// fungsi query untuk menampilkan data dari tabel service
$query = mysqli_query($mysqli, "SELECT * FROM is_service WHERE service_id='1'")
                                or die('Ada kesalahan pada query tampil data service : '.mysqli_error($mysqli));

$data = mysqli_fetch_assoc($query);
?>

<?php  
if (isset($_GET['id'])) { ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-check-square-o icon-title"></i> Service
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=service"> Service </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" class="form-horizontal" method="POST" action="modules/service/proses.php">
              <div class="box-body">
                
                <input type="hidden" name="service_id" value="<?php echo $data['service_id']; ?>">

                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="title" placeholder="Page title..." autocomplete="off" value="<?php echo $data['title']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control" id="ckeditor" name="content" required><?php echo $data['content']; ?></textarea>
                  </div>
                </div>

              </div><!-- /.box-body -->
              
              <div class="box-footer bg-btn-action">
                <div class="form-group">
                  <div class="col-sm-offset-0 col-sm-12">
                    <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                    <a href="?module=service" class="btn btn-default btn-reset">Cancel</a>
                  </div>
                </div>
              </div>
            </form>
          </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
else { ?>
  <section class="content-header">
    <h1>
      <i class="fa fa-check-square-o icon-title"></i> Service
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li class="active"> Service </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body justify">
            <p style="font-size:20px"><?php echo $data['title']; ?></p>
            <p><?php echo $data['content']; ?></p>
          </div>
        
          <div class="box-footer bg-btn-action">
            <a style="width:100px" class="btn btn-primary" href="?module=service&id=<?php echo $data['service_id']; ?>">
              Change
            </a>
          </div>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>