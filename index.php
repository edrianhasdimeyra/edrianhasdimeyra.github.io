<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Halaman Login | Sistem Informasi Buku Tamu Pabrik Cerdas CommIT</title>

    <link rel="icon" href="assets/img/pabrikcerdas.png" type="image/x-icon">

    <!-- Buat Favicon -->
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:#00BFFF">
<!-- Sweet Alert-->
<script src="jquery-3.6.0.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- End Sweet Alert-->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div style="background-color:#DAA520;"
                                 class="col-lg-6 d-lg-block shadow-lg
                                        p-5 text-center">
                        <img src="assets/img/pabrikcerdas.png" width="200">
                        <h3 style="color:#FFFF00"><b>Sistem Informasi Buku Tamu
                            <br> Pabrik Cerdas CommIT
                            <br> <small>Pekanbaru, Riau</small></b>
                        </h3>
                        </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="cek_login.php"
                                    method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username"
                                            class="form-control 
                                            form-control-user"
                                            id="Username" placeholder="Enter Username...">
                                            </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                            class="form-control form-control-user"
                                            id="Password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" id="tag">By. Edrian Hasdimeyra | 2021 - 
                                            <?=date('Y')?>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="large" id="cerdas">
                                        We always Commit for the future of Riau, Best Future, 
                                        Best Pabrik Cerdas, Indonesian Competent
                                        <br><h4 style=color:red>Daftar ? Klik Disini !</h4>
                                        </a>
                                    </div>
<script>
$('#tag').on('click', function(){
    Swal.fire({
        icon: 'warning',
        title: 'Universitas Islam Riau',
        text: 'Web Application ',
        footer: '<a href>Login?</a>'
    })
})
</script>
<script>
$('#cerdas').on('click', function(){
    Swal.fire({
        icon: 'warning',
        title: 'Pabrik Cerdas CommIT',
        text: 'Hati - Hati anda jadi CERDAS',
        footer: '<a href="register.php">Mau Cerdas?</a>'
    })
})
</script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>