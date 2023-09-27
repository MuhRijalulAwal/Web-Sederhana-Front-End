<!doctype html>
<html lang="en">
<head>
    <style>
        .gambar{
            justify-content:center ;
            height: 35%;
            width: 35%;
            border-style: bold;
            border-width: 10px;
            border-color: black;

        }
        .judul1{
            color: #00008B;
            font-family: Tahoma;
            font-style: Bold;
        }
    </style>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsi P.WEb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="container">
          <h2 style="color: white;">FAMILY TRANS</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>
          </ul>
          <span class="navbar-text">
          </span>
        </div>
        </div>
      </div>
    </nav>


<!---
<?php
            $mobil       =$_GET['mobil'];
            if ($mobil=="Honda Mobilio") {
                $img    ="img/honda-mobilio.jpg";
                $harga  ="149.000";
            }
            elseif ($mobil=="Toyota All New Avanza") {
                $img    ="img/toyota-all-new-avanza.png";
                $harga  ="129.000";
            }
            elseif ($mobil=="Toyota Agya") {
                $img    ="img/toyota-agya.webp";
                $harga  ="129.000";
            }
            elseif ($mobil=="Daihatsu Sigra") {
                $img    ="img/daihatsu-sigra.webp";
                $harga  ="139.000";
            }
            elseif ($mobil=="Daihatsu Terios") {
                $img    ="img/daihatsu-terios.jpg";
                $harga  ="200.000";
            }
            elseif ($mobil=="Honda Jazz") {
                $img    ="img/honda-jazz.jpg";
                $harga  ="300.000";
            }
            elseif ($mobil=="Mitshubisi XPander") {
                $img    ="img/mitshubisi-xpander.png";
                $harga  ="320.000";
            }
            elseif ($mobil=="Mitsubishi Pajero") {
                $img    ="img/mitsubishi-pajero.jpg";
                $harga  ="1.111.111";
            }
            elseif ($mobil=="Suzuki Ertiga") {
                $img    ="img/suzuki-ertiga.jpg";
                $harga  ="200.000";
            }
?>
!--->


<form method="POST" action="pesan.php">
    <div class="container">
    <div class="row">
        <div class="col mt-5">
          <h2>
                <?php
                echo "<div class=container>";
                echo "<center>";
                echo "<img class=gambar src=$img ></br>";
                echo"$mobil";
                echo "</center>";
                echo "</div>";
                ?>
          </h2>

          <section class="formulir">
             <?php
                echo "Jenis Mobil"; 
                echo "<input type=text name=mobil value=$mobil>";
             ?>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="nomor" class="form-control" id="floatingInput" placeholder="No.HP/Whatsapp">
              <label for="floatingInput">No.HP/Whatsapp</label>
            </div>
             <div class="form-floating mb-3">
              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama">
              <label for="floatingInput">Nama</label>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <select class="form-select" name="bank" aria-label="Default select example">
                      <option selected>Via Bank</option>
                      <option value="BCA">BCA</option>
                      <option value="MANDIRI">Mandiri</option>
                      <option value="BNI">BNI</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-check">
                      <input class="form-check-input" name="tunai" type="checkbox" value="Pembayaran Tunai" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Pembayaran Tunai
                      </label>
                </div>
             </div>
             <div class="row mb-5 mt-5">
                 <?php
                    echo "<div class=container>";
                    echo "<center>";
                    echo "<h2 class=judul1>IDR $harga /hari</h2>";
                    echo "</center>";
                    echo "</div>";
                 ?>
             </div>
             <div class="row mb-5 mt-5">
                <center>
                <button type="submit" style="width: 200px;" class="btn btn-success">Pesan</button>
                </center>
             </div>
            </section>
        </div>
    </div>
    </div>
</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
