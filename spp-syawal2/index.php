<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Siswa </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="bg.jpg">
    <div class="container-mt-5">
        <div class="row justify-content-md-left"> 
            <div class="col-md-3"> 
                <div class="card " style="margin:100px; border-radius:25px; background-color:rgba(0,0,0,0.2); width:400px; color:white;  "> <h5 class="text-center">Form Login Siswa</h5>
                    <div class="card-header">
                  

                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukan Username Anda.." required>

                            </div>
                            <div class="form-group mb-2">
                                <label>NIS</label>
                                <input type="number" name="nis" class="form-control" placeholder="Masukan Password Anda.." required>
                                

                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary"style="width:100%;"> Login </button>
                            </div>
                            <a href="index2.php">Login sebagai Admin / Petugas </a>
                        </form>
                    </div>

                </div>  
            </div>
        </div>
    </div>
</body>


<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>