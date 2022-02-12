<head>
<link rel="icon" href="assets/img/pabrikcerdas.png" type="image/x-icon">
</head>
<!-- panggil file header -->
<?php include "header2.php"; ?>

<?php

// Uji jika tombol simpan di klik
if(isset($_POST['bdaftar'])){
    $tgl = date('Y-m-d');

    // htmlspecialchar agar inputan lebih aman dari injection
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $paket = htmlspecialchars($_POST['paket'], ENT_QUOTES);
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES);

    //persiapan query simpan data
    $simpan = mysqli_query($koneksi, "INSERT INTO tdaftar VALUES ('','$tgl', '$nama', '$alamat', '$paket', '$nope')");

    // Uji jika simpan data sukses
    if ($simpan) { 
    echo "<script>alert('Simpan Data Sukses, Terima Kasih..!');
         document.location='?'</script>";
    } else {
    echo "<script>alert('Simpan Data GAGAL!!!');
    document.location='?'</script>"; 
    }  
}

?>


<!-- Head -->
<div class="head text-center">
    <img src="assets/img/pabrikcerdas.png" width="100">
<h2 class="text-white">Cara Instant Jadi Cerdas <br> Hanya di  <b style="color:#FFFF00">Pabrik Cerdas CommIT</b></h2>
</div>
<!-- End Head -->

<!-- Awal Row  -->
<div class="row mt-2">
    <!-- col-lg-7 -->
    <div class="col-lg-7 mb-3">
        <div class="card shadow bg-gradient-light">
            <!-- Card Body -->
            <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas Pendaftaran</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="paket" placeholder="Paket" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nope" placeholder="No.Hp" required>
                                </div>

                                <button type="submit" name="bdaftar" class="btn btn-user btn-block"
                                style="background-color:#FFFF00"><b>Daftar</b></button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                            <center><a href="logout.php" class="btn btn-danger mb-3"><i class="fa
                            fa-sign-out-alt"></i> Logout</a></center>
                                <a class="small" href="">By. Edrian Hasdimeyra | 2021 - <?=date('Y') ?></a>
                            </div>
            </div>
            <!-- End Card-Body -->
        </div>
    </div>
    <!-- End col-lg-7 -->

    <!-- col-lg-5 -->
    <div class="col-lg-5 mb-3">
         <!-- Card -->
        <div class="card shadow">
            <!-- Card Body -->
            <div class="card-body">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Statistik Pendaftaran</h1>
            </div>
            <?php 
                    // deklarasi tanggal

                    // menampilkan tanggal sekarang
                    $tgl_sekarang = date('Y-m-d');

                    // menampilkan tanggal kemarin
                    $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                    // mendapatkan 6 hari sebelum tanggal sekarang
                    $seminggu = date('Y-m-d h:i:s', strtotime('-1 week + 1 day', strtotime($tgl_sekarang)));

                    // sekarang
                    $sekarang = date('Y-m-d h:i:s');

                    // bulan ini
                    $sebulan = date('m');

                    // persiapan query tampilkan jumlah data pengunjung

                    $tgl_sekarang = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM tdaftar WHERE tanggal like '%$tgl_sekarang%'"
                    ));

                    $kemarin = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM tdaftar WHERE tanggal like '%$kemarin%'"
                    ));

                    $seminggu = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM tdaftar WHERE tanggal BETWEEN '$seminggu' and
                        '$sekarang'"
                    ));

                    $sebulan = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM tdaftar WHERE month(tanggal) = '$sebulan'"
                    ));

                    $keseluruhan = mysqli_fetch_array(mysqli_query(
                        $koneksi,
                        "SELECT count(*) FROM tdaftar" 
                    ));

            ?>
            <table class="table table-bordered">
                <tr>    
                    <td>Hari Ini</td>
                    <td>: <?= $tgl_sekarang[0] ?></td>
                </tr>
                <tr>
                    <td>Kemarin</td>
                    <td>: <?= $kemarin[0] ?></td>
                </tr>
                <tr>
                    <td>Minggu Ini</td>
                    <td>: <?= $seminggu[0] ?></td>
                </tr>
                <tr>
                    <td>Bulan Ini</td>
                    <td>: <?= $sebulan[0] ?></td>
                </tr>
                <tr>
                    <td>Keseluruhan</td>
                    <td>: <?= $keseluruhan[0] ?></td>
                </tr>
            </table>
            </div>
            <!-- End Card Body -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End col-lg-5 -->

</div>
<!-- End Row-->
