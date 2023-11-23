<?php
include_once('assets/configsys.php');
$_SESSION['last_activity'] = time();
include_once('assets/inactive.php');

if ($_SESSION["sign_in"] != true) {
  header("Location: sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" sizes="76x76" href="assets/img/logos/title.png">
  <link rel="icon" type="image/png" href="assets/img/logos/title.png">
  <title>Battery Swapping Station</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">

  <div class="min-height-100 bg-primary position-absolute w-100"></div>
  <br>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">BATTERY SWAPPING STATION</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Hi <?php echo $_SESSION["username"]; ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="logout.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="box">
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold"><a href="billing.php?bn=1">Battery 01</a></p>
                      <h5 class="font-weight-bolder" id="battery1p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=2">Battery 02</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=3">Battery 03</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery3p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=4">Battery 04</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=5">Battery 05</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=6">Battery 06</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=7">Battery 07</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <?php $battery_h = rand(70, 100);
                      $battery_p = rand(20, 100); ?>
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">
                        <a href="billing.php?bn=8">Battery 08</a>
                      </p>
                      <h5 class="font-weight-bolder" id="battery2p">
                        Loading...
                      </h5>
                      <p class="mb-0">
                        since yesterday
                        <span class="text-success text-sm font-weight-bolder"><?php echo $battery_h ?>%</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                      <a href="billing.php?h=<?php echo $battery_h ?>&&p= <?php echo $battery_p ?>">
                        <i class="fas fa-battery-full"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row mt-4">
          <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
              <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Battery 01 overview</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-arrow-up text-success"></i>
                  <span class="font-weight-bold">4% more</span> in 2021
                </p>
              </div>
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
              <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner border-radius-lg h-100">
                  <div class="carousel-item h-100 active" style="background-image: url('./assets/img/carousel-1.jpg');
      background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Get started with BATTERY SWAPPING STATION</h5>
                      <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                    </div>
                  </div>
                  <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
      background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Faster way to create web pages</h5>
                      <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                    </div>
                  </div>
                  <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-3.jpg');
      background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                      <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                        <i class="ni ni-trophy text-dark opacity-10"></i>
                      </div>
                      <h5 class="text-white mb-1">Share with us your design tips!</h5>
                      <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer pt-3  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  Copyrights
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  made with <i class="fas fa-battery-full"></i> by
                  <a href="" class="font-weight-bold" target="_self">Battery Swapping Station</a>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="" class="nav-link text-muted" target="_self">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="profile.php" class="nav-link text-muted" target="_self">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a href="records.php" class="nav-link text-muted" target="_self">Records</a>
                  </li>
                  <li class="nav-item">
                    <a href="logout.php" class="nav-link pe-0 text-muted" target="_self">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
  </main>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/ dashboard.min.js?v=2.0.4"></script>


  <script type="module" src="js/test.js"></script>

</body>

</html>