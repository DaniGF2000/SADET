<?php
  session_start();
  require("../db.php");
  $consulta = $DB_con->prepare("SELECT Usuario FROM usuario where Usuario= '".$_SESSION['usuarios']."'");
  $consulta->execute(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .row{
      border-radius: 15px;
      background: #3E38ED;
      padding: 15px;
      text-align: left;
      font-size: x-large;
      font-weight: bold;
      width: 1200px;
      height: 920px;
    }

  </style>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Intermedio 10-14</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">SADET</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/usuario.png" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>
            <?php
               
          echo $_SESSION['usuarios'];?></h6>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="finsesion.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Cerrar Sesion</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" >
          <i class="bi bi-grid"></i>
          <span>Menú</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <a href="inicial.php"><i class="bi bi-menu-button-wide"></i><span>Inicial</span><i></i></a>
        </a>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <a href="intermedio.php"><i class="bi bi-journal-text"></i><span>Intermedio</span><i></i></a>
        </a>
        
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <a href="intermedio10-14.php"><i class="bi bi-layout-text-window-reverse"></i><span>Intermedio 10-14</span><i></i></a>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <a href="avanzado.php"><i class="bi bi-bar-chart"></i><span>Avanzado</span><i></i></a>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Formulario</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Menú</a></li>
          <li class="breadcrumb-item">intermedio 10-14</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <h5 class="card-title"><h4 class="text-center">Seleccione imagen a cargar</h4></h5>
              <center>
              <form name="MiForm" id="MiForm" method="post" action="cargarintermedio1014.php" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-sm-4">
                  <label class="col-sm-2 control-label">Acta</label>
                  <input type="file" class="form-control" id="acta" name="acta" multiple></
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-4">
                  <br><label class="col-sm-2 control-label">Curp</label>
                    <input type="file" class="form-control" id="curp" name="curp" multiple>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-4">
                  <br><label>Foto Infantil</label>
                    <input type="file" class="form-control" id="foto" name="foto" multiple>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-4">
                  <br><label>Boleta</label>
                    <input type="file" class="form-control" id="boleta" name="boleta" multiple>
                  </div>
                </div>
              </form>

              <div class="form-group">
                  <div class="col-sm-4">
                  <br><label>Registro de Educando Anverso</label>
                    <input type="file" class="form-control" id="reganv" name="reganv" multiple>
                  </div>
                </div>
              </form>

              <div class="form-group">
                  <div class="col-sm-4">
                  <br><label>Registro de Educando Reverso</label>
                    <input type="file" class="form-control" id="regrev" name="regrev" multiple>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-4">
                    <br><label>usuario</label>
                    <select name="idusuario" id="idusuario">
                      <?php foreach ($consulta as $r) {
                        echo "<option value=".$r[0].">".$r[0]."</option>";
                      } ?>
                    </select>
                  </div>
                </div>


                <div class="form-group mt-3"><button name="guardar" class="btn btn-success" id="guardar">Guardar</button></div>
              </form>

            </div>
            </center>
          </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SADET</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Diseñado por <a href="https://bootstrapmade.com/">Daniel Gonzalez</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>