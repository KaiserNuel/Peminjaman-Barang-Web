<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="l.css">
    <link rel="icon" type="image/png" href="../images/logo1.png">
    <title>Aplikasi Pemimjaman Barang Lab</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->
    <div class="row" style="background:#0379C8">
     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" >
           <div class="featured-image mb-3">
            <img src="../user/images/user.png" class="img-fluid" >
           </div>
         </div> 

    <!-------------------- ------ Right Box ---------------------------->

        
       <div class="col-md-6 right-box">
          <div class="row align-items- text-center" >
                <div class="header-text mb-4">
                     <h2>Register</h2>
                </div>
                <form action="proseslogin_anggota.php" method="post">
                <div class="input-group mb-3">
                    <input name="username" type="text"class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="col-md-3 mt-2">
                <label>Jurusan :</label>
                <select name="jurusan" class="form-control mt-2">
                  <option value="" disabled selected>- Pilih Jurusan -</option>
                  <option value="Informatika">Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Teknologi Informasi">Teknologi Informasi</option>
                  <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
              </div>
              <div class="col-md-3 mt-2">
                <label>Nomor Kelas :</label>
                <select name="no_kelas" class="form-control mt-2">
                  <option value="" disabled selected>- No Kelas -</option>
                  <option value="1">A</option>
                  <option value="2">B</option>
                  <option value="3">C</option>
                  <option value="4">D</option>
                  <option value="5">E</option>
                </select>
              </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Register</button>
                    <a href="prosesregister.php"a>
                </div>

               
          </div>
          </form>
       </div> 

      </div>
    </div>

      
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
</div>
