
<?php  
session_start();
if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
  header('location:index.php?alert=3');
}else{

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel | Ell Faridzy</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web Profile">
    <meta name="keywords" content="Ell Faridzy" />
    
    <!-- favicon -->
  
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    <!-- DATA TABLES -->
    <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Datepicker -->
    <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="assets/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
   
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
              break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
        };
        // else return false
        return false;
      }
    </script>

  </head>
  <body class="skin-black sidebar-collapse fixed sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Ell</b> Faridzy</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <?php 
              require_once "../config/database.php";

              $query = mysqli_query($mysqli, "SELECT COUNT(message_id) as jumlah FROM is_message WHERE status='n'")
                                              or die('Ada kesalahan pada query tampil data message: '.mysqli_error($mysqli));

              $data = mysqli_fetch_assoc($query); 

              if ($data['jumlah']=='0') {
                $jumlah = '';
              } else {
                $jumlah = $data['jumlah'];
              }
              ?>
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span style="background:#dd4b39" class="label"><?php echo $jumlah; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <?php  
                  if ($data['jumlah']=='0') {
                    echo "<li class='header'>You have no new messages</li>";
                  } else {
                    echo "<li class='header'>You have $data[jumlah] messages</li>";
                  }
                  ?>
                  
                  <li class="footer"><a href="?module=message">See All Message <i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </li>

              <!-- panggil file "top-menu.php" untuk menampilkan menu -->
              <?php include "top-menu.php" ?>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
            
            <!-- panggil file "sidebar-menu.php" untuk menampilkan menu -->
            <?php include "sidebar-menu.php" ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- panggil file "content-menu.php" untuk menampilkan content -->
        <?php include "content.php" ?>

        <!-- Modal Logout -->
        <div class="modal fade" id="logout">
          <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-sign-out"> Logout</i></h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout? </p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-danger" href="logout.php">Yes, Logout</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <strong>Copyright &copy; 2017 - <a href="www.indrasatya.com">www.ellfaridzy.com</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- Datepicker -->
    <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
     <script src="assets/js/speakingurl.min.js" type="text/javascript"></script>
     <script src="assets/js/bootbox.min.js" type="text/javascript"></script>


     <script type="text/javascript">
       
             $("#name").on("keyup",function(){
              var s_url=getSlug($(this).val());
              $("#name_seo").val(s_url);
            })

              $("#update_name").on("keyup",function(){
              var s_url=getSlug($(this).val());
              $("#update_name_seo").val(s_url);
            })
               $("#judul").on("keyup",function(){
              var s_url=getSlug($(this).val());
              $("#judul_seo").val(s_url);
            })
              
    
     </script>
     <script src="assets/js-crud/category_article.js" type="text/javascript"></script>
     <script src="assets/js-crud/category_materi.js" type="text/javascript"></script>
     <script src="assets/js-crud/category_portfolio.js" type="text/javascript"></script>
     <script src="assets/plugins/highcharts-4.2.5/js/highcharts.js"></script>
<script src="assets/plugins/highcharts-4.2.5/js/modules/exporting.src.js"></script>
<script>
$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: '3D Grafik For Article Category'
        },
        subtitle: {
            text: '3D Grafik For Article Category'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Totals',
            data: [
            <?php 
            $query=mysqli_query($mysqli,"SELECT COUNT(*) as jumlah,b.name FROM is_article a,is_category_article b WHERE a.is_category_article_id=b.category_article_id GROUP BY b.name ");
            while ($data=mysqli_fetch_assoc($query)) {
            ?>
           
                ['<?php echo $data['name']; ?>', <?php echo $data['jumlah']; ?>],
             <?php  
               }
               ?>
            ]
        }]
    });
});
    </script>




    
   

    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // DataTables
        $("#dataTables1").dataTable();
        $('#dataTables2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });

    </script>

    <script src="assets/plugins/ckeditor/ckeditor.js"></script>

    <script>
      var roxyFileman = 'assets/plugins/ckeditor/plugins/fileman/index.html';
      $(function () {
        CKEDITOR.replace('ckeditor', {filebrowserBrowseUrl: roxyFileman,
          filebrowserImageBrowseUrl: roxyFileman + '?type=image',
          removeDialogTabs: 'link:upload;image:upload'});
      });
    </script>
    <script type="text/javascript">
        
        function hanyaAngka(evt){
            var char= (evt.which) ? evt.which:event.keyCode
            if(char>31 &&(char < 48 || char >57))
                return false;
            return true;
        }
    </script>

    

   

    
  </body>
</html>

<?php 
}
?>