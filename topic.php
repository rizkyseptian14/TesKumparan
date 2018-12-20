
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Topic</title>

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
                 <b>Topic</b>
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
                        <h3 class="animated fadeInLeft">Topic</h3>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Topic</h3></div>
                    <div class="panel-body">
                      <a href="tambah_topic.php">Tambah Topic</a>
                      <div class="responsive-table">
                      <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <tr>
                          <th>ID Topic</th>
                          <th>Judul</th>
                          <th>Isi</th>
                        </tr>
                  <?php
                  include('koneksi.php');

                  $query = mysql_query("SELECT * FROM tbtopic ORDER BY idtopic ASC") or die(mysql_error());
                  if(mysql_num_rows($query) == 0){ 
                    echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                  }else{  
                    $idtopic = 1;  
                    while($data = mysql_fetch_assoc($query)){ 
                      echo '<tr>';
                        echo '<td>'.$idtopic.'</td>';   
                        echo '<td>'.$data['judultopic'].'</td>';  
                        echo '<td>'.$data['isitopic'].'</td>';  
                        echo '<td>
                            <a href="edit_topic.php?idtopic='.$data['idtopic'].'" data-rel="reload"><i>Edit</i></a> /
                            <a href="hapus_topic.php?idtopic='.$data['idtopic'].'"data-rel="reload"><i onclick="return confirm(\'Yakin?\')">Hapus</i></a>
                            </td>'; 
                      echo '</tr>';
                      $idtopic++;  
                      
                    }
                    
                  }
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