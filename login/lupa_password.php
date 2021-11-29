<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <link rel="stylesheet" href="../css/tampilan.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body id="bg-forget">
    <div class="forget">
        <h2>Ubah Password</h2>
        <form action="../login/login.php" autocomplete="off">
            <input type="password" name="passBaru" placeholder="Masukan Password Baru" class="">
            <input type="pasword" name="ReEnter" placeholder="Masukan Kembali Password Baru" class=""><br />
            <button type="submit" name="verif" class="">Kirim Kode Verifikai</button>
            <input type="text" name="verifCode" placeholder="Masukan Kode Verifikai" class="">
            <button type="submit" name="submit" class="">Ubah</button>
        </form>
    </div>
</body>
</html>