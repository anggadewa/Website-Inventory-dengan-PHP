<?php 
if(isset($_SESSION['login'])){
    header("Location: index.php");
}
require_once 'db.php'; 
if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit();
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Inventory</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="logoinventory5.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="logoinventory6.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- <li class="active">
                        <a href="index.php?halaman=beranda"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                    </li> -->
                    <h4 class="menu-title">Pengaturan Barang Masuk</h4><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Barang Masuk</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li> <i class="menu-icon fa fa-archive"></i><a href="index.php?halaman=masuk">Input Barang Masuk </a></li>
                            <li><i class="menu-icon fa fa-list"></i><a href="index.php?halaman=stock">Stock Barang</a></li>
                        </ul>
                    </li>
                    <h4 class="menu-title">Pengaturan Barang Keluar</h4><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Barang Keluar</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li> <i class="menu-icon fa fa-outdent"></i> <a href="index.php?halaman=keluar"> Input Barang Keluar </a></li>
                            <li><i class="menu-icon fa fa-list"></i><a href="index.php?halaman=stockkeluar">Tabel Barang Keluar</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="index.php?halaman=logout"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="logoinventory6.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.php?halaman=logout"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <?php 
            if(isset($_GET['halaman'])){
                if($_GET['halaman'] == "masuk"){
                    include 'masuk.php';
                }
                // elseif ($_GET['halaman'] == "beranda") {
                //     include 'admin.php';
                // } 
                elseif ($_GET['halaman'] == "keluar") {
                    include 'keluar.php';
                } elseif ($_GET['halaman'] == "stock") {
                    include 'stock.php';
                } elseif ($_GET['halaman'] == "stockkeluar") {
                    include 'stockkeluar.php';
                } elseif ($_GET['halaman'] == "laporan") {
                    include 'laporan.php';
                } elseif ($_GET['halaman'] == "logout") {
                    include 'logout.php';
                } elseif ($_GET['halaman'] == "hapusstock") {
                    include 'hapusstock.php';
                } elseif ($_GET['halaman'] == "hapusstockkeluar") {
                    include 'hapusstockkeluar.php';
                }
            } else{
                include 'masuk.php';
            }

            ?>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
      $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>

<script type="text/javascript">
  function isi(){
        // alert('Berhasil');
        var no_transaksi = $("#no_transaksi").val();
        $.ajax({
            url: 'ajax_isi.php',
            data: "no_transaksi="+no_transaksi,
        }).success(function (data) {
            var json=data,
            obj = JSON.parse(json);
            $('#nama_barang').val(obj.nama_barang);
            $('#kode_barang').val(obj.kode_barang);
            $('#harga_barang').val(obj.harga_barang)
            $('#stock_barang').val(obj.stock_barang);
        });
    }
</script>
</body>
</html>
