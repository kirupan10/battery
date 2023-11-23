<?php
include_once('assets/inactive.php');
$_SESSION['last_activity'] = time();

if ($_SESSION["sign_in"] != true) {
  header("Location: sign-in.php");
  exit;
}
?>

<?php
$batteryno = $_GET['bn'];

if($_GET['bn'] !=true){
  header("Location: dashboard.php");
}
?>
<script>
  var batteryno = <?php echo $batteryno ?>;
</script>

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

<body class="g-sidenav-show bg-gray-0">
  <div class="card-body p-3">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="assets/img/user.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            <?php echo $_SESSION['username']; ?>
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            Standard user
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-email-83"></i>
                <span class="ms-2">Supports</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="ms-2">Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p style="font-weight: bold;" class="mb-0">Billing Receipt</p>
            </div>
          </div>
          <fieldset disabled="disabled">
            <div class="card-body">
              <p class="text-uppercase text-sm">Card payment Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Card Holder's Name</label>
                    <input class="form-control" type="text" value="Jack Peterson
">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Card Number</label>
                    <input class="form-control" type="email" value="****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">CIV</label>
                    <input class="form-control" type="text" value="****&nbsp;&nbsp;&nbsp;">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Month/Year</label>
                    <input class="form-control" type="text" value="07/27">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Name</label>
                    <input class="form-control" type="text" value="Jack Peterson">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                    <input class="form-control" type="text" value="077-123-4567">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" type="text" value="New York">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" type="text" value="United States">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Postal code</label>
                    <input class="form-control" type="text" value="437300">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Payment status</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Payment status</label>
                    <input class="form-control" type="text" value="Payment has been successfully completed.">
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="text-center mt-4">
              <h5>
                Battery <?php echo $batteryno ?><span class="font-weight-light">, Tray <?php echo $batteryno ?></span>
              </h5>
              <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Health %, Percentage %
              </div>
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Payment has been successfully completed.
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Collect your battery and close the Tray
              </div>
              
              <button onclick="redirectToAnotherPage()">Click me to redirect</button>
            </div>
          </div>
          <div class="d-lg-flex justify-content-lg-center" id="loading_img">
          </div>
          <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between justify-content-xl-center">
              <a class="btn btn-dark btn-sm d-none d-lg-block float-center mb-0" role="button" id="btnopenclose">Loaidng..</a>
              <a class="btn btn-dark btn-sm d-block d-lg-none float-center mb-0" role="button" href="Thankyou.php"><i class="ni ni-email-83"></i></a>
            </div>
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
                <a href="dashboard.php" class="nav-link text-muted" target="_self">Dashboard</a>
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
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/dashboard.min.js?v=2.0.4"></script>
  <script type="module" src="js/batterytray.js"></script>

  <script>
    function redirectToAnotherPage() {
        // Change the URL to the desired destination
        window.location.href = 'Thankyou.php?bn=<?php echo $batteryno; ?>'; // Replace with your desired URL
    }
</script>

</body>

</html>