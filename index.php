<?php
error_reporting(0);
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News</title>

  <!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/cibodas1.png">
</head>

<body id="mimin" class="dashboard">

        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.php" class="navbar-brand"> 
                 <b>News</b>
                </a>


            </div>
          </div>
        </nav>

      <div class="container-fluid mimin-wrapper">
  
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <center><img src="asset/img/baong.png"></center>
                    
                     <li class="active ripple">
                        <a href="index.php"><span class="fa-home fa"></span>News</a>
                    </li>
                    <li class="ripple">
                      <a href="topic.php"><span class="fa-bullhorn fa"></span>Topic</a>
                    </li>
                  </ul>
                </div>
            </div>


            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">News</h3>
                    </div>
                  </div>
              </div>

            <form method="POST" action="">
              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" name="cari" placeholder="Masukan Topic.." autocomplete="off">
                      <input type="submit" name="search" value="Search">
                      
                    </div>
                  </div>
                </li>
              </ul>
            </form>


              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>News</h3></div>
                    <div class="panel-body">
                      <a href="tambah_news.php">Tambah News</a>
                      <div class="responsive-table">
                      <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                      
                        <tr>
                        <th>ID News</th>
                          <th>Topic</th>
                          <th>Judul</th>
                          <th>Isi</th>
                        </tr>
                    <?php
                      $idnews=1;
                      $cari = $_POST['cari'];
                      $search = $_POST['search'];
                      if ($search) {
                        if ($cari !="") {
                          $data2 = mysql_query("SELECT * FROM tbnews WHERE topic LIKE '%$cari%'") or die(mysql_error());
                      }else{
                          $data2 = mysql_query("SELECT * FROM tbnews ") or die(mysql_error());
                      }
                      } else {
                          $data2 = mysql_query("SELECT * FROM tbnews") or die(mysql_error());
                      }
                      while ($data3 = mysql_fetch_array($data2)) {
                        ?>
                      <tr>
                        <td><?php echo $idnews++ ?></td>
                        <td><?php echo $data3['topic']; ?></td>
                        <td><?php echo $data3['judulnews']; ?></td>
                        <td><?php echo $data3['isinews']; ?></td>
                        <td>
                          <a href="edit_news.php?idnews=<?php echo $data3['idnews'];?>"><i>Edit</i></a> /
                          <a onclick="return confirm(\'Yakin?\')" href="hapus_news.php?idnews=<?php echo $data3['idnews'];?>">Hapus</i></a>
                        </td>
                      </tr>
                      <?php }
                       ?>

                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
      </div>

<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>