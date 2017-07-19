

 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Add User
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=user"> User </a></li>
      <li class="active"> dd </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/user/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fullname</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fullname" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" onkeypress="return hanyaAngka(event)" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Age</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="age" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Addrss</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" autocomplete="off" required>
                </div>
              </div>
              
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="avatar" autocomplete="off" required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=user" class="btn btn-default btn-reset">Cancel</a>
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
      // fungsi query untuk menampilkan data dari tabel user
      $query = mysqli_query($mysqli, "SELECT * FROM is_user WHERE user_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data user : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change user
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=user"> user </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/user/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <input type="hidden" name="user_id" value="<?php echo $data['user_id']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $data['username']; ?>" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fullname</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fullname" autocomplete="off" value="<?php echo $data['fullname']; ?>" required>
                </div>
              </div>

              <br>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $data['email']; ?>" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone" onkeypress="return hanyaAngka(event)" value="<?php echo $data['phone']; ?>" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Age</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="age" value="<?php echo $data['age']; ?>" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>" autocomplete="off" required>
                </div>
              </div>
              

              <div class="form-group">
                <label class="col-sm-1 control-label">Image</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="avatar" autocomplete="off">
                  <br>
                  <img src="../images/user/<?php echo $data['avatar']; ?>" height="150">
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=user" class="btn btn-default btn-reset">Cancel</a>
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