<?php
include 'login.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->

<html>
  <head>
    
    <title>Sistem Pemantauan Agensi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!--        <style>
                header {
        background-color: #FFE4C4;
        color: #000;
        padding: 30px;
      }
                body{
        background-image: url('img/bg_01.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
                nav{
        background-color:  #FFE4C4;
        color: #fff;
        padding: 20px;
      }
                nav-link{
        font-size: 24px;
      }
                h1{
          text-align: center;
      }
      
            </style>-->
  </head>
  <body class=sb-nav-fixed>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="LamanUtama.php">Sistem Pemantauan Agensi</a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 ms-5 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
      <!-- Navbar Search-->
      <!--            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                      <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                          <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                      </div>
                  </form>-->
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <!--                            <div class="sb-sidenav-menu-heading">Core</div>-->
              <a class="nav-link" href="LamanUtama.php">
                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-house"></i></div>
                Laman Utama
              </a>
              <!--                            <div class="sb-sidenav-menu-heading">Interface</div>-->
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAgensi" aria-expanded="false" aria-controls="collapseAgensi">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pendaftaran
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseAgensi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="Agensi_Daftar.php">Daftar Agensi / Anak Syarikat / Badan Berkanun</a>
                  <a class="nav-link" href="Agensi_Senarai.html">Senarai Agensi / Anak Syarikat / Badan Berkanun</a>
                  <a class ="nav-link" href="Carian.html">Carian</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Laporan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseLaporan" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="Laporan.html">Laporan</a>

                </nav>
              </div>
              <!--                            <div class="sb-sidenav-menu-heading">Addons</div>
                                          <a class="nav-link" href="charts.html">
                                              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                              Charts
                                          </a>
                                          <a class="nav-link" href="tables.html">
                                              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                              Tables
                                          </a>
                                      </div>-->
            </div>
            <!--                    <div class="sb-sidenav-footer">
                                    <div class="small">Logged in as:</div>
                                    Start Bootstrap
                                </div>-->
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <!--                        <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>-->
            <!--                        <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-primary text-white mb-4">
                                                <div class="card-body">Primary Card</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-warning text-white mb-4">
                                                <div class="card-body">Warning Card</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body">Success Card</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card bg-danger text-white mb-4">
                                                <div class="card-body">Danger Card</div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    Sistem Pemantauan Agensi
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <label class="col col-form-label">Selamat Datang <?php echo $_SESSION['nama']?> </label>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col">
                        <label class="col col-form-label">Log Masuk Terakhir Pada <?php echo $_SESSION['login_time']?> </label>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
