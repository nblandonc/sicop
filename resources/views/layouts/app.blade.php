<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>


    SICOP
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/2d5b910a75.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- SweetAlert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .login-form {
      display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
    }
  </style>

</head>

<body class="g-sidenav-show bg-gray-100">

  <div id="app">
    @yield('content')
  </div>

  <script src="/js/app.js" type="text/javascript"></script>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
   
  </script>

  <script>
    function mostrar() {
      var tipo = document.getElementById('password');

      if(tipo.type == 'password') {
        tipo.type = 'text';
        var icon = document.getElementById('fa-eye');
        icon.classList.toggle('fa-eye-slash');
        icon.id = 'fa-eye-slash';

      }else {
        tipo.type = 'password';
        var icon = document.getElementById('fa-eye-slash');
        icon.classList.toggle('fa-eye-slash');
        icon.id = 'fa-eye';
      }
    }
  </script>

  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js"></script>
</body>

</html>