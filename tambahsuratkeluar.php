<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Surat Keluar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
      <h1>Surat Keluar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Jenis Surat</li>
          <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Surat Keluar</h5>
              <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Unit Kerja</label>
                            <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1">Sub Bagian Kepegawaian</option>
                              <option value="2">Sub Bagian Keuangan</option>
                              <option value="3">Sekertariatan</option>
                              <option value="4">Bidang Rehabilitas Sosial</option>
                              <option value="5">Bidang Perlindungan & Jaminan Sosial</option>
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Jenis Surat</label>
                          <select class="form-select" aria-label="Default select example">
                              <option selected></option>
                              <option value="1">Surat Keputusan (SK)</option>
                              <option value="2">Surat Keluar</option>
                              <option value="3">Surat Dinas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Perihal</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Kode Surat</label>
                          <input type="email" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Surat</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tujuan Surat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <a href="suratkeluar.php" class="btn btn-kembali me-md-2" type="button">Kembali</a>
                          <button class="btn btn-simpan" type="button">Simpan</button>
                        </div>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  
  <?php include_once "menu/footer.php"?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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