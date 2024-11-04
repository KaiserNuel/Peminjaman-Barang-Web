<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/png" href="./images/logo1.png">
    <title>Aplikasi Pemimjaman Barang Lab</title>
</head>
<style>
    * {
        font-family: 'Roboto', monospace;
    }
</style>

<body>
<nav class=" navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #2691D9;">
        <div class="container ">
        <a class="navbar-brand" style="font-size: 25px;" href="#">
            <img src="./images/logo1.png" alt="Aplikasi Pemimjaman Barang Lab Logo" style="height: 45px; width: 45px; margin-right: 5px;">
            Aplikasi Pemimjaman Barang Lab
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  fs-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="tentangkami.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item ms-5 loggin-button">
                        <a href="login.php">
                            <button type="button" class="btn btn-light "
                                style="color: #2691D9; font-weight:bold"><i class="fas fa-sign-in-alt"></i> Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="text-center " style="margin-top: 160px;">
            <h1 class="fw-bolder" style="font-size: 48px;">About Our Company<br></h1>
            <hr>
            </div>
       
        <div class="col-md-3 mt-4">
                <img src="./images/perusahaan.png" alt="Company Image" style=" height: 250px;" class="img-fluid" >
            </div>
            <div class="col-md-9" style="margin-top: 70px; font-size:medium">
                <p> Aplikasi Pemimjaman Barang Lab adalah perusahaan yang berdedikasi dalam menyediakan solusi peminjaman barang untuk kebutuhan laboratorium. Dengan pengalaman bertahun-tahun dalam industri ini, kami mengerti betapa pentingnya memiliki akses yang mudah dan cepat terhadap peralatan dan barang-barang laboratorium yang diperlukan.</p>
                <p>Visi kami adalah memudahkan proses peminjaman barang lab dengan menyediakan platform online yang inovatif dan efisien. Kami ingin memastikan bahwa para peneliti, mahasiswa, dan staf laboratorium dapat fokus pada penelitian dan kegiatan laboratorium mereka tanpa hambatan atau kekhawatiran terkait persediaan peralatan.</p>
            </div>

        </div>
    </div>

    <footer class="bg-light text-center text-lg-start" >
    <div class="text-center p-3" style="background-color: #1B5D8B; margin-top:218px;">
        <i class="fas fa-gavel text-white" style="margin-right: 5px;"></i>
        <label class="text-white">2023 Copyright - Aplikasi Pemimjaman Barang Lab</label>
    </div>
</footer>

    
</body>

</html>
