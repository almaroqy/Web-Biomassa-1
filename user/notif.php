<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <style>
        .sticky.is-active {position:fixed; top: 0; left: 0; width: 100%}
    </style>

    <link rel="stylesheet" href="../css/tampilan.css">
    <title>Riwayat</title>
</head>
<body style="background-color: azure;">
    <nav class="sticky">
        <div class="container">
            <div class="row">
                <div class="col py-4">
                    <div class="nv">
                        <h1><a href="navigasi_visitor.php">NAMA APLIKASI</a></h1>
                            <ul>
                                <li><a href="../user/dashboard_user.php">Dashboard</a></li>
                                <li><a href="../user/biota.php">Biota</a></li>
                                <li><a href="../user/pakan.php">Pakan</a></li>
                                <li><a href="../user/keramba.php">Keramba</a></li>
                                <li><a href="../user/panen.php">Panen</a></li>
                                <li><a href="../user/notif.php">Riwayat</a></li>
                                <li><a href="../visitor/dashboard_visitor.php">log Out</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>        
    </nav>

    <header>
        <div class="container">
            <div class="row"></div>
        <div class="row">
            <div class="col-xxl-12 py-5"  >
                <div class="bg-wlc">
                    <div class="wlc-riwa">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <br>

    <main class="container">
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="../img/panen.jpg" alt="gambar alam">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="crop"><a href="../user/panen.php">Hasil Monitoring Biomassa Ikan 
                    Pada Bulan September</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="../img/jenis_ikan.jpg" alt="gambar alam">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="fish"><a href="../user/keramba.php">Jenis ikan yang sedang dibudidayakan
                    pada KJABB</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="w-100" src="../img/Pakan.jpg" alt="gambar alam">
            </div>
            <div class="col-md-8 py-5">
                <h1 class="feed"><a href="../user/pakan.php">Informasi Pakan Pada budidaya 
                    ikan di KJABB</a></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione ipsam facere quod?</p>
            </div>
        </div>
    </main>
    
    <footer class="container text-white">
        <div class="row">
            <div class="col-12 py-4 " style="background-color: #3C8D9E;">
                <p>Alamat <br>
                    Provisi: Jawa Tengah, Kabupaten: Jepara, Kecamatan: Karimun Jawa, Desa: Karimun Jawa
                </p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>
</html>