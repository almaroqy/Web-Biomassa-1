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
    <title>Biota</title>
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
            <div class="col-xxl-12 py-5" style="background-image: url(../img/jenis_ikan.jpg); background-size: cover;" >
                <div class="bg-wlc">
                    <div class="wlc-bio">
                        <h1>BIOTA</h1>
                        <p>dahdahdakhdkahabxbasjadajhsdkjashdkajhsda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <br>

    <main class="container"><br>
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="nav-tb">
                    <ul>
                        <li><a href="../user/tambah_biota.php">Tambah Data</a></li>
                        <li>I</li>
                        <li><a href="../user/ubah_biota.php">Ubah Data</a></li>
                        <li>I</li>
                        <li><a href="../user/pengukuran_ikan.php">Pengukuran Ikan</a></li>
                    </ul>
                </div>
                <div class="table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Ikan</th>
                                <th>Bobot Ikan</th>
                                <th>Jumlah Bibit</th>
                                <th>Panjang Ikan</th>
                                <th>Taggal Tebar</th>
                                <th>Tanggal Panen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main><br>
    
    <footer class="container text-white">
        <div class="row">
            <div class="col-12 py-4 " style="background-color: #3C8D9E;">
                <div class="ft">
                    <p>Alamat <br>
                        Provisi: Jawa Tengah, Kabupaten: Jepara, Kecamatan: Karimun Jawa, Desa: Karimun Jawa
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>
</body>
</html>