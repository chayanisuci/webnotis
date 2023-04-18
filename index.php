<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NOTIS - Penomoran Surat Otomatis</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }


    .wrapper {
      width: 275px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .wrapper header {
      display: flex;
      align-items: center;
      padding: 25px 30px 10px;
      justify-content: space-between;
    }

    header .icons {
      display: flex;
    }

    header .icons span {
      height: 38px;
      width: 38px;
      margin: 0 1px;
      cursor: pointer;
      color: #878787;
      text-align: center;
      line-height: 38px;
      font-size: 1.9rem;
      user-select: none;
      border-radius: 50%;
    }

    .icons span:last-child {
      margin-right: -10px;
    }

    header .icons span:hover {
      background: #f2f2f2;
    }

    header .current-date {
      font-size: 1rem;
      font-weight: 500;
    }

    .calendar {
      padding: 20px;
    }

    .calendar ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      text-align: center;
    }

    .calendar .days {
      margin-bottom: 20px;
    }

    .calendar li {
      color: #333;
      width: calc(700% / 49);
      font-size: 0.75rem;
    }

    .calendar .weeks li {
      font-weight: 500;
      cursor: default;
    }

    .calendar .days li {
      z-index: 1;
      cursor: pointer;
      position: relative;
      margin-top: 30px;
    }

    .days li.inactive {
      color: #aaa;
    }

    .days li.active {
      color: #fff;
    }

    .days li::before {
      position: absolute;
      content: "";
      left: 50%;
      top: 50%;
      height: 30px;
      width: 30px;
      z-index: -1;
      border-radius: 50%;
      transform: translate(-50%, -50%);
    }

    .days li.active::before {
      background: #2C5C52;
    }

    .days li:not(.active):hover::before {
      background: #f2f2f2;
    }

  </style>

  <?php include_once "menu/header.php"?>

  <?php include_once "menu/sidebar.php"?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Siswa Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title" style="color: #2C5C52; font-weight: bold;">Jenis Surat <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                      <img src="assets/img/letter.png">
                    </div>
                    <div class="ps-3">
                      <h6 style="color: #2C5C52; font-weight: bold;"> 1258</h6>
                      <span class="text-muted small pt-2 ps-1">Data</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End siswa Card -->

            <!-- Guru Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title" style="color: #2C5C52; font-weight: bold;">Unit Kerja <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                      <img src="assets/img/united.png">
                    </div>
                    <div class="ps-3">
                      <h6 style="color: #2C5C52; font-weight: bold;">1258</h6>
                      <span class="text-muted small pt-2 ps-1">Data</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Guru Card -->


            <!-- Pegawai TU -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Rekap Surat <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon d-flex align-items-center justify-content-center">
                      <img src="assets/img/repeat.png">
                    </div>
                    <div class="ps-3">
                      <h6 style="color: #2C5C52; font-weight: bold;">30</h6>
                      <span class="text-muted small pt-2 ps-1">Data</span>

                    </div>
                  </div>

                </div>

              </div>
            </div><!-- End Pegawai TU -->
            
            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Kalender -->
          <div class="card">
            <div class="card-body pb-3 mt-3">
              <div class="wrapper">
                <header>
                  <p class="current-date"></p>
                  <div class="icons">
                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                  </div>
                </header>
                <div class="calendar">
                  <ul class="weeks">
                    <li>Min</li>
                    <li>Sen</li>
                    <li>Sel</li>
                    <li>Rab</li>
                    <li>Kam</li>
                    <li>Jum</li>
                    <li>Sab</li>
                  </ul>
                  <ul class="days"></ul>
                </div>
              </div>
            </div>
          </div><!-- End Kalender -->
        </div><!-- End Right side columns -->
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
  <script>
    const daysTag = document.querySelector(".days"),
    currentDate = document.querySelector(".current-date"),
    prevNextIcon = document.querySelectorAll(".icons span");

    // getting new date, current year and month
    let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth();

    // storing full name of all months in array
    const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
      "Agustus", "September", "Oktober", "November", "Desember"
      ];

    const renderCalendar = () => {
      let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
        let liTag = "";

      for (let i = firstDayofMonth; i > 0; i--) { // creating li of previous month last days
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
      }

      for (let i = 1; i <= lastDateofMonth; i++) { // creating li of all days of current month
        // adding active class to li if the current day, month, and year matched
        let isToday = i === date.getDate() && currMonth === new Date().getMonth() &&
        currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
      }

      for (let i = lastDayofMonth; i < 6; i++) { // creating li of next month first days
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
      }
      currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
      daysTag.innerHTML = liTag;
    }
    renderCalendar();

    prevNextIcon.forEach(icon => { // getting prev and next icons
      icon.addEventListener("click", () => { // adding click event on both icons
        // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) { // if current month is less than 0 or greater than 11
          // creating a new date of current year & month and pass it as date value
          date = new Date(currYear, currMonth);
          currYear = date.getFullYear(); // updating current year with new date year
          currMonth = date.getMonth(); // updating current month with new date month
        } else {
          date = new Date(); // pass the current date as date value
        }
        renderCalendar(); // calling renderCalendar function
      });
    });
  </script>
  
</body>

</html>