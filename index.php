<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <title>Sistem Informasi Pendataan Penduduk</title>

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css">

</head>
<body>

<div class="container-fluid">
    <h1 class="text-center mt-5">Sistem Informasi Pendataan Penduduk</h1>
    <h2 class="text-center">halaman Login</h2>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card mt-2">
                <div class="card-body">
                    <br>
                     <center>
                            <span style="color: #4d98ce">
                                <i class="fa fa-hotel fa-3x" ></i>
                            </span>
                     </center>
                     <hr>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="uname" require="required" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" name="pass" require="required" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="submit" name="submit" value="login" class="btn btn-primary btn-block mb-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>