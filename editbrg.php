<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
?>
<?php
include "config/koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="./images/logo1.png">
  <title>Aplikasi Pemimjaman Barang Lab</title>
  <style>
    .sidebar {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background: linear-gradient(to right, #2691D9, #0F9CFC);
      padding-top: 70px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 16px;
      color: white;
      display: block;
    }

    .sidebar a:hover {
      background-color: #F5F5F5;
      color: black;
    }

    .content {
      margin-left: 200px;
      padding: 20px;
      padding-top: 30px;

    }
  </style>
</head>

<body>
<div class="sidebar">
  <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  <a href="barang.php"><i class="fas fa-box"></i> Barang</a>
  <a href="peminjam.php"><i class="fas fa-users"></i> Anggota</a>
  <a href="peminjaman.php"><i class="fas fa-clipboard"></i> Peminjaman</a>
  <a href="pengembalian.php"><i class="fas fa-undo"></i> Pengembalian</a>
  </div>

  <div class="content">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Barang</h1>
             <hr>
              <section class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form element -->
                <div class="box box-danger">
                <div class="box-header with-border">
                </div><!--/.box-header-->
                <?php
                  $id_brg = $_GET['id_brg'];
                  $query = $mysqli->query("SELECT * FROM barang where id_brg='$id_brg'");
                  while ($qu = mysqli_fetch_array($query)){
                    ?>
                  <!-- form start -->
                  <form role="form" action="proseseditbrg.php" method="post">
                  <div class = "box-body">
                  <div class ="form-group">
                    <label for="exampleInputEmail1">ID :</label>
                    <input type="text" disable value="<?php echo $qu['id_brg'] ?>" name="id_brg" class="form-control mt-2" placeholder="" disabled>
                    <input type="hidden" value="<?= $qu['id_brg']; ?>" name="id_brg">
                    </div>
                    <div class ="form-group mt-3">
                    <label for="exampleInputPassword1">Nama Barang :</label>
                    <input type="text"  value="<?php echo$qu['nama_brg'] ?>" name="nama_brg"
                    class="form-control mt-2" placeholder="" required>
                    </div>
                   <div class ="form-group mt-3">
                    <label for="exampleInputPassword1">Jenis Barang :</label>
                    <input type="text"  value="<?php echo$qu['jenis_brg'] ?>" name="jenis_brg"
                    class="form-control mt-2" placeholder="" required>
                    </div>
                     <div class ="form-group mt-3">
                    <label for="exampleInputPassword1">Stok Barang :</label>
                    <input type="text"  value="<?php echo$qu['stok_brg'] ?>" name="stok_brg"
                    class="form-control mt-2" placeholder="" required>
                    </div>

                <?php
                }
            ?>


            <div class="box mt-5" style=" display: flex; justify-content: space-between;">
            
             <a href="barang.php" class="btn btn-danger">Back</a>
             <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            
            </div>
            </div>
            </form>
            </section><!-- /.content -->
          </div>
        </div>