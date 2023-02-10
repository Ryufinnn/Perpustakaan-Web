<?php 
session_start();
include "lib/koneksi.php";
include "header.php"; 
include "sidebar.php";
$idpenulis=$_GET['id_penulis'];
$query = mysqli_query($koneksi, "SELECT * FROM penulis
                    WHERE id_penulis='$idpenulis'");
$penulis= mysqli_fetch_array($query); 
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      	Edit
        Data
        Penulis
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Penulis</li>
      </ol>
    </section>

 <!-- Main content -->
    <section class="content">
    	  <div class="row">
<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Penulis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="proses_edit_penulis.php">
              <div class="box-body">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Penulis</label>
                  <div class="col-sm-10">
                    <input type="text" readonly="readonly" class="form-control" id="inputEmail3" name="idpenulis" value="<?php echo $idpenulis; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Penulis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="penulis" value="<?php echo $penulis['nama_penulis']; ?>">
                  </div>
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Simpan Data Buku</button>
                <input type="button" class="btn btn-warning" onclick="location='data_penulis.php?menu=data_penulis'" value="kembali">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include 'footer.php'
?>
