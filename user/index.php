<?php
session_start();
include("config.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<!-- <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="dashboard.css" rel="stylesheet">
	<link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="icon" type="image/png" href="./images/logo1.png">
	<title>Aplikasi Pemimjaman Barang Lab</title>
	<style>
		* {
			font-family: 'Roboto', monospace;
		}
	</style>
</head>

<body>
	<nav class=" navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #2691D9;">
		<div class="container ">
			<a class="navbar-brand" style="font-size: 25px;" href="#">
				🛒 Aplikasi Pemimjaman Barang Lab
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item ms-5 loggin-button">
					<a href="logout.php">
						<button type="button" class="btn btn-light "
						style="color: #2691D9; font-weight:bold"><i class="fas fa-sign-in-alt"></i> Logout</button>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<?php
    //List produk dari database
$alat = $mysqli->query("SELECT * FROM barang") or die(mysql_error());
?>
<br><br><br>
<div class="container">
	<div class="row">
		<?php
		while ($row_alat = mysqli_fetch_array($alat)) {
			$foto = $row_alat['foto'];
			?>
			<div class="col-md-4" style="padding: 50px">
				<div class="card">
					<img src="../<?php echo $foto; ?>" class="card-img-top" alt="" width="350" height="300">
					<div class="card-body">
						<h4 class="card-title"><?php echo $row_alat['nama_brg']; ?></h4>
						<p class="card-text">Jenis Barang: <?php echo $row_alat['jenis_brg']; ?></p>
						<p class="card-text">Stok: <?php echo $row_alat['stok_brg']; ?></p>
						<div class="text-center">
							<a href="cartfunction.php?act=add&amp;id_product=<?php echo $row_alat['id_brg']; ?>&amp;id_pembeli=<?php echo $_SESSION['id_anggota']; ?>&amp;ref=view_cart.php" class="btn btn-primary"><i class="fas fa-cart-arrow-down"></i> Pinjam Barang</a>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>



<!-- jQuery -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script>
	$(document).ready(function(){
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
      button_content.html('Adding...'); //Loading button text

      $.ajax({ //request ajax ke cart_process.php
      	url: "cart_process.php",
      	type: "POST",
      	dataType:"json",
      	data: form_data
      }).done(function(data){ //Jika Ajax berhasil
        $("#cart-info").html(data.items); //total items di cart-info element
        button_content.html('BELI'); //
        alert("Item telah dimasukan ke keranjang belanja anda");
        if($(".shopping-cart-box").css("display") == "block"){
        	$(".cart-box").trigger( "click" );
        }
      })
      e.preventDefault();
    });

  //menampilkan item ke keranjang belanja
		$( ".cart-box").click(function(e) {
			e.preventDefault();
			$(".shopping-cart-box").fadeIn();
    $("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //menampilkan loading gambar
    $("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //membuat permintaan ajax menggunakan dengan jQuery Load() & update
  });

  //keluar keranjang belanja
  $( ".close-shopping-cart-box").click(function(e){ //fungsi klik pengguna pada keranjang belanja
  	e.preventDefault();
    $(".shopping-cart-box").fadeOut(); //keluar keranjang belanja
  });

  //Menghapus item dari keranjang
  $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
  	e.preventDefault();
    var pcode = $(this).attr("data-code"); //mendapatkan get produk
    $(this).parent().fadeOut(); //menghapus elemen item dari kotak
    $.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //mendapatkan Harga Barang dari Server
      $("#cart-info").html(data.items); //update Menjullahkan item pada cart-info
      $(".cart-box").trigger( "click" ); //trigger click on cart-box to untuk memperbarui daftar item
    });
  });

});
</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>