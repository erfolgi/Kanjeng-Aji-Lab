<?php include("include/connect.php"); ?><!DOCTYPE html>
<script type="text/javascript" src="include/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function jumpTo (link)
   {
   var new_url=link;
   if (  (new_url != "")  &&  (new_url != null)  )
      window.location=new_url;
}
function popUp(URL) {
	day = new Date();
	id = 'keringanan';
	eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=1000,height=400,left=50,top=50');");
}
jQuery(document).ready(function(){
  jQuery('.tambah').click(function(){
		var nopas		= jQuery(this).attr('nopas');
		popUp('tambah_tindakan.php?no_pas='+nopas);
	});
});
</script>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Wapik Table</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <div class= "col-12">
  <div>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Kanjeng Aji Pamungkas<span class="highlight"> Lab</span></h1>
        </div>

      </div>
    </header>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Transaksi Pasien</div>
        <div class="card-body">
          <div >
            <?php $sqlpas = $mysqli->query("SELECT * FROM pasien WHERE NO_PAS='".$_GET['no_pas']."'");
                  $datapas = $sqlpas->fetch_object();
            ?>
            <table width="35%">
              <tr>
                <td width="30%">No. Pasien</td>
                <td>: <?php echo $datapas->NO_PAS ?></td>
              </tr>
              <tr>
                <td width="30%">Nama </td>
                <td>: <?php echo $datapas->NAMA_PAS ?></td>
              </tr>
              <tr>
                <td width="30%">ALAMAT</td>
                <td>: <?php echo $datapas->ALAMAT_PAS ?></td>
              </tr>
              <tr>
                <td width="30%">No. Telp</td>
                <td>: <?php echo $datapas->TELP_PAS ?></td>
              </tr>
            </table>
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="10%">No. Billing</th>
                  <th>Nama Pemeriksaan</th>
                  <th>Tarif</th>
                  <th width="10%">Aksi</th>
                </tr>
              </thead>
              <?php
              $sql="SELECT * FROM transaksi ";
              $query = $mysqli->query($sql);
              while($data=$query->fetch_object()){ ?>
                <tr>
                  <td><?php echo $data->NO_BILL ;?></td>
                  <td><?php echo $data->NAMA_TINDAKAN ; ?></td>
                  <td><?php echo $data->TARIF ; ?></td>
                  <td><input type="button" name="bayar" id="bayar<?php echo $data->ID ;?>" value="BAYAR"></td>
                  <td><a href="transaksi_pasien.php?no_pas=<?php echo $data->NO_PAS ; ?>"><input type="button" value="PROSES"></a></td>
                </tr>
              <?php
              }
              ?>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <button class="tambah" nopas="<?php echo $_GET['no_pas']; ?>">
          <span class="float-left">Tambah Pemeriksaan</span>
        </button>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div>
        <div class="text-center">
          <large>Wapik Creative, Copyright © 2017</large>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
  </div>
</body>

</html>
