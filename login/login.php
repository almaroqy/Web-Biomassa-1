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

    <link rel="stylesheet" href="../css/tampilan.css">
    <title>LOG-IN</title>  
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <body id="bg-login">
                <div class="login">
                    <h2>LOG - IN</h2>
                    <form action="../user/dashboard_user.php" autocomplete="off">
                        <input type="text" name="user" placeholder="Username" class="">
                        <input type="pasword" name="pass" placeholder="Password" class=""><br />
                        <button type="submit" name="submit" class="">Login</button>
                    </form>
                    <a href="../login/lupa_password.php">Lupa Password</a>
                    <a href="../login/signup.php">Sign Up</a>
                </div>
            </body>
        </div>
    </div>
</div>
</html>