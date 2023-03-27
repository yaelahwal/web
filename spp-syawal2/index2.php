<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin | Petugas </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="bg.jpg">
    <div class="container-mt-5">
        <div class="row justify-content-md-left"> 
            <div class="col-md-3"> 
                <div class="card " style="margin:100px; border-radius:25px; background-color:rgba(0,0,0,0.2); width:400px; color:white;  "> <h5 class="text-center">Form Login Administrator / Petugas</h5>
                    <div class="card-header">
                  

                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group mb-2">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"> Login </button>
                            </div>
                            <a href="index.php">Login sebagai Siswa </a>
                        </form>
                    </div>

                </div>  
            </div>
        </div>
    </div>
</body>


<script src="js/bootstrap.bundle.min.js"></script>
<style>
    .div{
        
    }
</style>
</body>
</html>