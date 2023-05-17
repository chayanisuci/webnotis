<?php
include 'proses/koneksi.php';

$conn = new Koneksi();

$tampil = $conn->kueri("SELECT * FROM `tb_pengunjung`");


if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $dlt = $kon->kueri("DELETE FROM tb_pengunjung WHERE id_pengunjung = '$id' ");
    if ($dlt == true) {
        $_SESSION['hapus'] = "1";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['hapus'] = "0";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Pengunjung</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <?php include_once "menu/header.php"?>

    <?php include_once "menu/sidebar.php"?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Pengunjung</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Pengunjung</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Pengunjung</h5>
                            <!-- Table with stripped rows -->
                            <?php
                if (isset($_SESSION['hapus'])) {
                    if ($_SESSION['hapus'] == 1) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>Data Barang Berhasil Dihapus !
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        unset($_SESSION['hapus']);
                    } elseif ($_SESSION['hapus'] == 0) {
                        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>Data Barang Gagal Dihapus!
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        unset($_SESSION['hapus']);
                    }
                }
?>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tanggal Permintaan</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
foreach ($tampil as $data) {?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama']?></td>
                                        <td><?= $data['email']?></td>
                                        <td><?= $data['tgl']?></td>
                                        <td><?= $data['tujuan']?></td>
                                        <td>
                                            <?php echo '<button type="button" data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#hapus' . $data['id_pengunjung'] . '"><i class="bi bi-trash"></i></button>'; ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <!-- modal-hapus -->
    <?php echo '<div class="modal fade" id="hapus' . $data['id_pengunjung'] . '" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">'; ?>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                    <h4>Apakah anda ingin hapus data</h4>
                    <h4>tersebut ?</h4>
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <form action="" method="POST">
                    <?php echo '<button type="submit" class="btn btn-primary" name="delete" value="' . $data['id_pengunjung'] . ' " ">Hapus</button>'; ?>

                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end-modal-hapus -->

    <?php include_once "menu/footer.php"?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>