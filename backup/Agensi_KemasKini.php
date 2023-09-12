<?php
include ('conn.php');
session_start();
$updateid = $_GET['updateid'];
$_SESSION['varname'] = $updateid;
$query = "select * from infoagensi where ID=$updateid";
$result = mysqli_query($conn, $query);
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <!--    <link href="css/style.css" rel="stylesheet" />-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
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
            <li><a class="dropdown-item" href="logout.php" >Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">

              <a class="nav-link" href="LamanUtama.php">
                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-house"></i></div>
                Laman Utama
              </a>

              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pendaftaran
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="Agensi_Daftar.php">Daftar Agensi / Anak Syarikat / Badan Berkanun</a>
                  <a class="nav-link" href="Agensi_Senarai.php">Senarai Agensi / Anak Syarikat / Badan Berkanun</a>
                  <a class ="nav-link" href="Carian.php">Carian</a>
                </nav>
              </div>
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLaporan" aria-expanded="false" aria-controls="collapseLaporan">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Laporan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="collapseLaporan" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="Laporan.php">Laporan</a>

                </nav>
              </div>

            </div>
          </div>

        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Agensi / Anak Syarikat / Badan Berkanun</h1>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    Pendaftaran
                  </div>
                  <div class="card-body">
                    <div class="container">

                      <form action="kemaskini.php" method="post" id="registration">

                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Maklumat Terperinci</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step2-tab" data-bs-toggle="tab" href="#step2">Dokumen Penting</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step3-tab" data-bs-toggle="tab" href="#step3">Pinjaman / Bayaran / Tunggakan daripada Kerajaan Negeri</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step4-tab" data-bs-toggle="tab" href="#step4">Pinjaman / Bayaran / Tunggakan daripada Persekutuan</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step5-tab" data-bs-toggle="tab" href="#step5">Nilai Aset Semasa / Tetap</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step6-tab" data-bs-toggle="tab" href="#step6">Liabiliti Jangka Pendek / Panjang</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step7-tab" data-bs-toggle="tab" href="#step7">Sumbangan Kerajaan Negeri (2%)</a>
                          </li>
                          <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip" data-bs-placement="top" >
                            <a class="nav-link " id="step8-tab" data-bs-toggle="tab" href="#step8">Sumbangan Kerajaan Negeri (10%)</a>
                          </li>
                        </ul>

                        <div class="tab-content py-4" id="myTabContent">
                          <div class="tab-pane fade show active" id="step1">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
echo'                         <div class="row">
                              <div class="col">
                              
                                <select class="form-select" id="selectform" onclick="DaftarAgensiAnakSyarikatBadanBerkanun()">
                                  <option selected Hidden>Pilih </option>
                                  <option value="1">Agensi / Anak Syarikat</option>
                                  <option value="2">Badan Berkanun</option>

                                </select>  
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <br>
                                <h2 id="heading" style="display:none;"></h2>
                                <br>

                                
                        <label for="NamaAgensidanAnakSyarikat" class="col col-form-label" id="NamaAgensidanAnakSyarikatLabel" style="display: none;">Nama Agensi dan Anak Syarikat</label>
                                <input type="text" class="form-control" id="NamaAgensidanAnakSyarikatInput" name="NamaAgensidanAnakSyarikatInput" style="display: none;" value="' . $row['NamaAgensi'] . '">
                                
                               </div>
                           </div>
                           <div class="row">
                             <div class="col">
                               <label for="AlamatAgensidanAnakSyarikat" class="col col-form-label" id="AlamatAgensidanAnakSyarikatLabel" style="display: none;">Alamat Berdaftar</label>
                               <textarea class="form-control" rows="3" id="AlamatAgensidanAnakSyarikatInput" name="AlamatAgensidanAnakSyarikatInput" style="display: none;" >' . $row['AlamatAgensi'] . '</textarea>                                                                  
                            </div>
                           </div>
                            <div class="row">
                             <div class="col">

                                <label for="NamaHubungiAgensidanAnakSyarikat" class="col col-form-label" id="NamaHubungiAgensidanAnakSyarikatLabel" style="display: none;">Nama Pengurus Besar / Ketua Pegawai Eksekutif</label>
                                <input type="text" class="form-control" id="NamaHubungiAgensidanAnakSyarikatInput" name="NamaHubungiAgensidanAnakSyarikatInput" style="display: none;" value="' . $row['NamaHubungiAgensi'] . '" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="NomborTelefonAgensidanAnakSyarikat" class="col col-form-label" id="NomborTelefonAgensidanAnakSyarikatLabel" style="display: none;">Nombor Telefon</label>
                                <input type="text" class="form-control" id="NomborTelefonAgensidanAnakSyarikatInput" name="NomborTelefonAgensidanAnakSyarikatInput" style="display: none;" value="' . $row['NomborTelefonAgensi'] . '"  >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="AlamatEmelAgensidanAnakSyarikat" class="col col-form-label" id="AlamatEmelAgensidanAnakSyarikatLabel" style="display: none;">Emel</label>
                                <input type="email" class="form-control" id="AlamatEmelAgensidanAnakSyarikatInput" name="AlamatEmelAgensidanAnakSyarikatInput" style="display: none;" value="' . $row['EmelAgensi'] . '"   >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="TaklukanSyarikatAgensidanAnakSyarikat" class="col col-form-label" id="TaklukanSyarikat" style="display: none;">Tertakluk atas</label>
                                <select class="form-select" id="TaklukanSyarikatSelect" name="TaklukanSyarikatSelect" style="display: none;" >
                                  <option selected >' . $row['Taklukan'] . '</option>
                                  <option value="Memorandum & Association">Memorandum & Association</option>
                                  <option value="Enakmen">Enakmen</option>
                                </select> 
                              </div>
                            </div>

                            <div class="row"> 
                              <div class="col">
                                <label for="NamaBadanBerkanun" class="col col-form-label" id="NamaBadanBerkanunLabel" style="display: none;" >Nama Badan Berkanun</label>
                                <input type="text" class="form-control" id="NamaBadanBerkanunInput" name="NamaBadanBerkanunInput" style="display: none;" value="' . $row['NamaBadanBerkanun'] . '" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="AlamatBadanBerkanun" class="col col-form-label" id="AlamatBadanBerkanunLabel" style="display: none;" >Alamat Berdaftar</label>
                                <textarea class="form-control" rows="3" id="AlamatBadanBerkanunInput" name="AlamatBadanBerkanunInput" style="display: none;" >' . $row['AlamatBadanBerkanun'] . '</textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">

                                <label for="NamaHubungiBadanBerkanun" class="col col-form-label" id="NamaHubungiBadanBerkanunLabel" style="display: none;">Nama Pengurus Besar/Ketua Pegawai Eksekutif</label>
                                <input type="text" class="form-control" id="NamaHubungiBadanBerkanunInput" name="NamaHubungiBadanBerkanunInput" style="display: none;" value="' . $row['NamaHubungiBadanBerkanun'] . '" >
                              </div>

                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="NomborTelefonBadanBerkanun" class="col col-form-label" id="NomborTelefonBadanBerkanunLabel" style="display: none;">Nombor Telefon</label>
                                <input type="text" class="form-control" id="NomborTelefonBadanBerkanunInput" name="NomborTelefonBadanBerkanunInput" style="display: none;" value="' . $row['NomborTelefonBadanBerkanun'] . '"  >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="AlamatEmelBadanBerkanun" class="col col-form-label" id="AlamatEmelBadanBerkanunLabel" style="display: none;">Emel</label>
                                <input type="email" class="form-control" id="AlamatEmelBadanBerkanunInput" name="AlamatEmelBadanBerkanunInput" style="display: none;" value="' . $row['EmelBadanBerkanun'] . '" >
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">

                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade" id="step2">
                            <div class="row">
                              <div class="col">
                                <h2> Dokumen Penting</h2>
                                <label for="PenyataKewangan" class="col col-form-label">Penyata Kewangan</label>
                                <input type="file" accept=".pdf" class="form-control" id="PenyataKewangan" name="PenyataKewangan" value="' . $row['PenyataKewangan'] . '" >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="PerancanganPeniagaan" class="col col-form-label">Perancangan Peniagaan</label>
                                <input type="file" accept=".pdf" class="form-control" id="PerancanganPeniagaan" name="PerancanganPeniagaan" >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="CartaOrganisasi" class="col col-form-label">Carta Organisasi</label>
                                <input type="file" accept=".pdf" class="form-control" id="CartaOrganisasi" name="CartaOrganisasi" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="CartaAhliPerlembagaanPengarah" class="col col-form-label">Carta Ahli Perlembagaan Pengarah</label>
                                <input type="file" accept=".pdf" class="form-control" id="CartaAhliPerlembagaanPengarah" name="CartaAhliPerlembagaanPengarah" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="TarikhPelantikan" class="col col-form-label" >Tarikh Pelantikan</label>
                                <input type="date" class="form-control" id="TarikhPelantikan" name="TarikhPelantikan" value="' . $row['TarikhPelantikan'] . '" >
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade disabled" id="step3">
                            <div class="row">
                              <div class="col">
                                <h1> Pinjaman / Bayaran / Tunggakan daripada Kerajaan Negeri</h1>
                                <h2>Maklumat Pinjaman</h2>
                                <label for="PinjamanAsal" class="col col-form-label">Pinjaman Asal</label>
                                <input type="text" class="form-control" id="PinjamanAsalKerajaanNegeri" name="PinjamanAsalKerajaanNegeri" onkeyup = "CommaThousand()" value="' . $row['PinjamanAsalKN'] . '" >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBakiPinjamanSemasaKerajaanNegeri" name="TarikhBakiPinjamanSemasaKerajaanNegeri" value="' . $row['TarikhBakiPinjamanPokokKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label"  >Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokKerajaanNegeri" name="BakiPinjamanPokokKerajaanNegeri" onkeyup=" KiraBakiPinjamanPokokKerajaanNegeri()" value="' . $row['BakiPinjamanPokokKN'] . '" >
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col">

                                <h3>Bayaran Sehingga </h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label>Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBayaranKerajaanNegeri" name="TarikhBayaranKerajaanNegeri" value="' . $row['TarikhBayaranSehinggaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="PokokBayaranSehingga" class="col col-form-label"  >Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranKerajaanNegeri" name="PokokBayaranKerajaanNegeri" onkeyup=" KiraBakiPinjamanPokokKerajaanNegeri(); KiraJumlahSemasaKerajaanNegeri()" value="' . $row['PokokBayaranSehinggaKN'] . '" >
                              </div>

                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="FaedahBayaranSehingga" class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranKerajaanNegeri" name="FaedahBayaranKerajaanNegeri" onkeyup=" KiraJumlahSemasaKerajaanNegeri()" value="' . $row['FaedahBayaranSehinggaKN'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="JumlahBayaranSehingga" class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranKerajaanNegeri" name="JumlahBayaranKerajaanNegeri" readonly value="' . $row['JumlahBayaranSehinggaKN'] . '" > 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <br>
                                <h2>Maklumat Bayaran</h2>
                                <label class="col col-form-label">Bayaran Bulanan</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh Bayaran</label>
                                <input type="date" class="form-control" id="TarikhBayaranBulananKerajaanNegeri" name="TarikhBayaranBulananKerajaanNegeri" value="' . $row['TarikhBayaranBulananKN'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranBulananKerajaanNegeri" name="PokokBayaranBulananKerajaanNegeri" onkeyup=" KiraBakiPinjamanPokokKerajaanNegeri(); KiraJumlahTahunanKerajaanNegeri()" value="' . $row['PokokBayaranBulananKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranBulananKerajaanNegeri" name="FaedahBayaranBulananKerajaanNegeri" onkeyup=" KiraJumlahTahunanKerajaanNegeri()" value="' . $row['FaedahBayaranBulananKN'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranBulananKerajaanNegeri" name="JumlahBayaranBulananKerajaanNegeri" value="' . $row['JumlahBayaranBulananKN'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label"  >Baki Pinjaman Pokok Baharu</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokBaharuKerajaanNegeri" name="BakiPinjamanPokokBaharuKerajaanNegeri" readonly value="' . $row['BakiPinjamanPokokBaharuKN'] . '" >
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col">
                                <h2> Maklumat Tunggakan</h2>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tunggakan Sehingga</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanKerajaanNegeri" name="TarikhTunggakanKerajaanNegeri" value="' . $row['TarikhTunggakanSehinggaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiTunggakanSebelum" class="col col-form-label">Baki Tunggakan Semasa</label>
                                <input type="text" class="form-control" id="BakiTunggakanKerajaanNegeri" name="BakiTunggakanKerajaanNegeri" onkeyup=" KiraTunggakanPinjamanKerajaanNegeri()"  value="' . $row['BakiTunggakanSemasaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanPokokKerajaanNegeri" name="TarikhTunggakanPokokKerajaanNegeri" value="' . $row['TarikhTunggakanSemasaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokBakiTunggakanKerajaanNegeri" name="PokokBakiTunggakanKerajaanNegeri" onkeyup=" KiraTunggakanPinjamanKerajaanNegeri();KiraJumlahTunggakanKerajaanNegeri()" value="' . $row['PokokTunggakanSemasaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Faedah" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahBakiTunggakanKerajaanNegeri" name="FaedahBakiTunggakanKerajaanNegeri" onkeyup=" KiraTunggakanPinjamanKerajaanNegeri();KiraJumlahTunggakanKerajaanNegeri()" value="' . $row['FaedahTunggakanSemasaKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Jumlah" class="col col-form-label">Jumlah</label>
                                <input type="text" class="form-control" id="JumlahTunggakanKerajaanNegeri" name="JumlahTunggakanKerajaanNegeri" value="' . $row['JumlahTunggakanKN'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakanSekarang" class="col col-form-label">Baki Tunggakan Baharu</label>
                                <input type="text" class="form-control" id="BakiTunggakanBaharuKerajaanNegeri" name="BakiTunggakanBaharuKerajaanNegeri" readonly value="' . $row['BakiTunggakanBaharuKN'] . '" >
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade disabled" id="step4">

                            <div class="row">
                              <div class="col">
                                <h1> Pinjaman / Bayaran / Tunggakan daripada Persekutuan</h1>
                                <h2>Maklumat Pinjaman</h2>
                                <label for="PinjamanAsal" class="col col-form-label">Pinjaman Asal</label>
                                <input type="text" class="form-control" id="PinjamanAsalPersekutuan" name="PinjamanAsalPersekutuan" value="' . $row['PinjamanAsalP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBakiPinjamanSemasaPersekutuan" name="TarikhBakiPinjamanSemasaPersekutuan" value="' . $row['TarikhBakiPinjamanPokokP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label">Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokPersekutuan" name="BakiPinjamanPokokPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan()" value="' . $row['BakiPinjamanPokokP'] . '">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                              <div class="col">
                                <h3>Bayaran Sehingga </h3>
                                <label for="TarikhBayaranSehinggaPersekutuan" class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBayaranSehinggaPersekutuan" name="TarikhBayaranSehinggaPersekutuan" value="' . $row['TarikhBayaranSehinggaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="PokokBayaranSehingga" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokBayaranPersekutuan" name="PokokBayaranPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan(); KiraJumlahSemasaPersekutuan()" value="' . $row['PokokBayaranSehinggaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="FaedahBayaranSehingga" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahBayaranPersekutuan" name="FaedahBayaranPersekutuan" onkeyup=" KiraJumlahSemasaPersekutuan()" value="' . $row['FaedahBayaranSehinggaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahBayaranSehingga" class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranPersekutuan" name="JumlahBayaranPersekutuan" value="' . $row['JumlahBayaranSehinggaP'] . '"> 
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col">
                                <h2>Maklumat Bayaran</h2>
                                <label class="col col-form-label">Bayaran Bulanan</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh Bayaran</label>
                                <input type="date" class="form-control" id="TarikhBayaranBulananPersekutuan" name="TarikhBayaranBulananPersekutuan" value="' . $row['TarikhBayaranBulananP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranBulananPersekutuan" name="PokokBayaranBulananPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan(); KiraJumlahTahunanPersekutuan()" value="' . $row['PokokBayaranBulananP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranBulananPersekutuan" name="FaedahBayaranBulananPersekutuan" onkeyup="KiraJumlahTahunanPersekutuan()" value="' . $row['FaedahBayaranBulananP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranBulananPersekutuan" name="JumlahBayaranBulananPersekutuan" value="' . $row['JumlahBayaranBulananP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label">Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokBaharuPersekutuan" name="BakiPinjamanPokokBaharuPersekutuan" value="' . $row['BakiPinjamanPokokBaharuP'] . '">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col">
                                <h2>Maklumat Tunggakan</h2>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tunggakan Sehingga</label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanPersekutuan" name="TarikhTunggakanPersekutuan" value="' . $row['TarikhTunggakanSehinggaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiTunggakanSebelum" class="col col-form-label">Baki Tunggakan Semasa</label>
                                <input type="text" class="form-control" id="BakiTunggakanPersekutuan" name="BakiTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan()" value="' . $row['BakiTunggakanSemasaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanPokokPersekutuan" name="TarikhTunggakanPokokPersekutuan" value="' . $row['TarikhTunggakanSemasaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokTunggakanPersekutuan" name="PokokTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan();KiraJumlahTunggakanPersekutuan()" value="' . $row['PokokTunggakanSemasaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahTunggakanPersekutuan" name="FaedahTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan();KiraJumlahTunggakanPersekutuan()" value="' . $row['FaedahTunggakanSemasaP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakan" class="col col-form-label">Jumlah Tunggakan</label>
                                <input type="text" class="form-control" id="JumlahTunggakanPersekutuan" name="JumlahTunggakanPersekutuan" value="' . $row['JumlahTunggakanP'] . '">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakan" class="col col-form-label">Baki Tunggakan Baharu</label>
                                <input type="text" class="form-control" id="BakiTunggakanBaharuPersekutuan" name="BakiTunggakanBaharuPersekutuan" value="' . $row['BakiTunggakanBaharuP'] . '">
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade" id="step5">
                            <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Nilai Aset Semasa
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p><button id="addRowSemasa">Add new row</button></p>
                                    <table id="TableAsetSemasa" class="display" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Nama Aset</th>
                                          <th>Jenis Aset</th>
                                          <th>Nilai Aset</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>

                                    </table>
                                    <label class="col col-form-label">Jumlah Aset</label>
                                    <input type="text" id="JumlahAset" class="form-control" readonly>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Nilai Aset Tetap
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p><button id="addRowTetap">Add new row</button></p>
                                    <table id="TableAsetTetap" class="display" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Nama Aset</th>
                                          <th>Jenis Aset</th>
                                          <th>Nilai Aset</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade" id="step6">
                            <div class="accordion" id="accordionExample1">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Liabiliti Jangka Panjang
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                  <div class="accordion-body">
                                    <p><button id="addRowPanjang">Add new row</button></p>
                                    <table id="TableLiabilitiPanjang" class="display" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Nama Liabiliti</th>
                                          <th>Jenis Liabiliti</th>
                                          <th>Nilai Liabiliti</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Liabiliti Jangka Pendek
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                  <div class="accordion-body">
                                    <p><button id="addRowPendek">Add new row</button></p>
                                    <table id="TableLiabilitiPendek" class="display" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Nama Liabiliti</th>
                                          <th>Jenis Liabiliti</th>
                                          <th>Nilai Liabiliti</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade" id="step7">
                            <div class="row">
                              <div class="col">
                                <h2> Sumbangan Kerajaan Negeri (2% dari jumlah pendapatan)</h2>
                                <label for="JumlahPendapatan" class="col col-form-label">Jumlah Pendapatan Semasa</label>
                                <input type="text" class="form-control" id="JumlahPendapatanKerajaanNegeri" name="JumlahPendapatanKerajaanNegeri" onkeyup="KiraSumbanganPendapatan()"  required value="' . $row['JumlahPendapatanSemasaDP'] . '">
                              </div>
                            </div>

                            <br>
                            <div class="row">
                              <div class="col">
                                <h3>Maklumat Sumbangan</h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhSumbanganPendapatan" name="TarikhSumbanganPendapatan" value="' . $row['TarikhSumbanganDP'] . '"> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Amaun</label>
                                <input type="text" class="form-control" id="AmaunSumbanganPendapatan" name="AmaunSumbanganPendapatan" readonly value="' . $row['AmaunSumbanganDP'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Bukti</label>
                                <input type="file" class="form-control" id="BuktiSumbanganPendapatan" name="BuktiSumbanganPendapatan" value="' . $row['BuktiSumbanganDP'] . '">
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary next">Terus <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                          <div class="tab-pane fade" id="step8">
                            <div class="row">
                              <div class="col">
                                <h2> Sumbangan Kerajaan Negeri (10%)(Untuk projek usahama anak syarikat dengan pihak swasta)</h2>
                                <label for="JumlahPendapatan" class="col col-form-label">Jumlah Keuntungan Semasa</label>JumlahKeuntunganSemasaSP
                                <input type="text" class="form-control" id="JumlahKeuntunganProjek" name="JumlahKeuntunganProjek" onkeyup="KiraSumbanganKeuntungan()"  required value="' . $row['JumlahKeuntunganSemasaSP'] . '">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col">
                                <h3>Maklumat Sumbangan </h3>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhSumbanganKeuntungan" name="TarikhSumbanganKeuntungan" value="' . $row['TarikhSumbanganSP'] . '"> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Amaun</label>
                                <input type="text" class="form-control" id="AmaunSumbanganKeuntungan" name="AmaunSumbanganKeuntungan" value="' . $row['AmaunSumbanganSP'] . '">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Bukti</label>
                                <input type="file" class="form-control" id="BuktiSumbanganKeuntungan" name="BuktiSumbanganKeuntungan" value="' . $row['BuktiSumbanganSP'] . '">
                              </div>
                            </div>
                                <br>
                                <div class="d-flex justify-content-between">
                                  <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                                  <button type="submit" class="btn btn-primary" name="submit">KemasKini <i class="fas fa-angle-right"></i></button>
                                </div>';
                            }
                            ?>
                          </div>
                        </div>
                      </form>
                    </div>  
                  </div>                
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <!--jQuery Scripts-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>    
    <script src="js/scripts.js"></script>
    <script src="js/WizardForm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.5/api/sum().js"></script>
    <script>

            let table = new DataTable('#TableAsetSemasa');
            let table1 = new DataTable('#TableAsetTetap');
            let table2 = new DataTable('#TableLiabilitiPanjang');
            let table3 = new DataTable('#TableLiabilitiPendek');
            function DaftarAgensiAnakSyarikatBadanBerkanun() {
              var selectbutton = document.getElementById('selectform');
              var selecteditem = selectbutton.value;
              var setheading = document.getElementById('heading');
              var labelcontainer = document.getElementById('NamaAgensidanAnakSyarikatLabel');
              var inputFieldContainer = document.getElementById('NamaAgensidanAnakSyarikatInput');
              var labelcontainer1 = document.getElementById('AlamatAgensidanAnakSyarikatLabel');
              var inputFieldContainer1 = document.getElementById('AlamatAgensidanAnakSyarikatInput');
              var labelcontainer2 = document.getElementById('NamaHubungiAgensidanAnakSyarikatLabel');
              var inputFieldContainer2 = document.getElementById('NamaHubungiAgensidanAnakSyarikatInput');
              var labelcontainer3 = document.getElementById('NomborTelefonAgensidanAnakSyarikatLabel');
              var inputFieldContainer3 = document.getElementById('NomborTelefonAgensidanAnakSyarikatInput');
              var labelcontainer4 = document.getElementById('AlamatEmelAgensidanAnakSyarikatLabel');
              var inputFieldContainer4 = document.getElementById('AlamatEmelAgensidanAnakSyarikatInput');
              var labelcontainer5 = document.getElementById('TaklukanSyarikat');
              var inputFieldContainer5 = document.getElementById('TaklukanSyarikatSelect');
              var labelcontainer6 = document.getElementById('NamaBadanBerkanunLabel');
              var inputFieldContainer6 = document.getElementById('NamaBadanBerkanunInput');
              var labelcontainer7 = document.getElementById('AlamatBadanBerkanunLabel');
              var inputFieldContainer7 = document.getElementById('AlamatBadanBerkanunInput');
              var labelcontainer8 = document.getElementById('NamaHubungiBadanBerkanunLabel');
              var inputFieldContainer8 = document.getElementById('NamaHubungiBadanBerkanunInput');
              var labelcontainer9 = document.getElementById('NomborTelefonBadanBerkanunLabel');
              var inputFieldContainer9 = document.getElementById('NomborTelefonBadanBerkanunInput');
              var labelcontainer10 = document.getElementById('AlamatEmelBadanBerkanunLabel');
              var inputFieldContainer10 = document.getElementById('AlamatEmelBadanBerkanunInput');

              if (selecteditem == "1") {
                setheading.style.display = 'block';
                setheading.innerHTML = "Agensi / Anak Syarikat";
                labelcontainer.style.display = 'block';
                inputFieldContainer.style.display = 'block';
                labelcontainer1.style.display = 'block';
                inputFieldContainer1.style.display = 'block';
                labelcontainer2.style.display = 'block';
                inputFieldContainer2.style.display = 'block';
                labelcontainer3.style.display = 'block';
                inputFieldContainer3.style.display = 'block';
                labelcontainer4.style.display = 'block';
                inputFieldContainer4.style.display = 'block';
                labelcontainer5.style.display = 'block';
                inputFieldContainer5.style.display = 'block';
                labelcontainer6.style.display = 'none';
                inputFieldContainer6.style.display = 'none';
                labelcontainer7.style.display = 'none';
                inputFieldContainer7.style.display = 'none';
                labelcontainer8.style.display = 'none';
                inputFieldContainer8.style.display = 'none';
                labelcontainer9.style.display = 'none';
                inputFieldContainer9.style.display = 'none';
                labelcontainer10.style.display = 'none';
                inputFieldContainer10.style.display = 'none';
              } else if (selecteditem == "2") {
                setheading.style.display = 'block';
                setheading.innerHTML = "Badan Berkanun";
                labelcontainer.style.display = 'none';
                inputFieldContainer.style.display = 'none';
                labelcontainer1.style.display = 'none';
                inputFieldContainer1.style.display = 'none';
                labelcontainer2.style.display = 'none';
                inputFieldContainer2.style.display = 'none';
                labelcontainer3.style.display = 'none';
                inputFieldContainer3.style.display = 'none';
                labelcontainer4.style.display = 'none';
                inputFieldContainer4.style.display = 'none';
                labelcontainer5.style.display = 'none';
                inputFieldContainer5.style.display = 'none';
                labelcontainer6.style.display = 'block';
                inputFieldContainer6.style.display = 'block';
                labelcontainer7.style.display = 'block';
                inputFieldContainer7.style.display = 'block';
                labelcontainer8.style.display = 'block';
                inputFieldContainer8.style.display = 'block';
                labelcontainer9.style.display = 'block';
                inputFieldContainer9.style.display = 'block';
                labelcontainer10.style.display = 'block';
                inputFieldContainer10.style.display = 'block';

              } else {
                setheading.style.display = 'none';
                labelcontainer.style.display = 'none';
                inputFieldContainer.style.display = 'none';
                labelcontainer1.style.display = 'none';
                inputFieldContainer1.style.display = 'none';
                labelcontainer2.style.display = 'none';
                inputFieldContainer2.style.display = 'none';
                labelcontainer3.style.display = 'none';
                inputFieldContainer3.style.display = 'none';
                labelcontainer4.style.display = 'none';
                inputFieldContainer4.style.display = 'none';
                labelcontainer5.style.display = 'none';
                inputFieldContainer5.style.display = 'none';
                labelcontainer6.style.display = 'none';
                inputFieldContainer6.style.display = 'none';
                labelcontainer7.style.display = 'none';
                inputFieldContainer7.style.display = 'none';
                labelcontainer8.style.display = 'none';
                inputFieldContainer8.style.display = 'none';
                labelcontainer9.style.display = 'none';
                inputFieldContainer5.style.display = 'none';
                labelcontainer9.style.display = 'none';
                inputFieldContainer9.style.display = 'none';
                labelcontainer10.style.display = 'none';
                inputFieldContainer10.style.display = 'none';
              }
            }

            function KiraBakiPinjamanPokokKerajaanNegeri() {
              var BakiPinjamanPokokTahunSebelum = parseInt(document.getElementById('BakiPinjamanPokokKerajaanNegeri').value);
              var BayaranPokokTahunan = parseInt(document.getElementById('PokokBayaranKerajaanNegeri').value);
              var BayaranPokokBulanan = parseInt(document.getElementById('PokokBayaranBulananKerajaanNegeri').value);

              var result = BakiPinjamanPokokTahunSebelum - (BayaranPokokTahunan + BayaranPokokBulanan);
              var str = result.toString();

              document.getElementById('BakiPinjamanPokokBaharuKerajaanNegeri').value = "RM " + str;

            }

            function KiraTunggakanPinjamanKerajaanNegeri() {
              var BakiTunggakanPinjamanSemasa = parseInt(document.getElementById('BakiTunggakanKerajaanNegeri').value);
              var PokokBakiTunggakanKerajaanNegeri = parseInt(document.getElementById('PokokBakiTunggakanKerajaanNegeri').value);
              var FaedahBakiTunggakanKerajaanNegeri = parseInt(document.getElementById('FaedahBakiTunggakanKerajaanNegeri').value);


              var addTunggakan = PokokBakiTunggakanKerajaanNegeri + FaedahBakiTunggakanKerajaanNegeri;
              var JumlahBakiTunggakanKerajaanNegeri = BakiTunggakanPinjamanSemasa + addTunggakan;
              var str = JumlahBakiTunggakanKerajaanNegeri.toString();

              document.getElementById('BakiTunggakanBaharuKerajaanNegeri').value = 'RM ' + str;
            }

            function KiraBakiPinjamanPokokPersekutuan() {
              var BakiPinjamanPokokTahunSebelum = parseInt(document.getElementById('BakiPinjamanPokokPersekutuan').value);
              var BayaranPokokTahunan = parseInt(document.getElementById('PokokBayaranPersekutuan').value);
              var BayaranPokokBulanan = parseInt(document.getElementById('PokokBayaranBulananPersekutuan').value);

              var result = BakiPinjamanPokokTahunSebelum - (BayaranPokokTahunan + BayaranPokokBulanan);
              var str = result.toString();
              document.getElementById('BakiPinjamanPokokBaharuPersekutuan').value = "RM " + str;

            }

            function KiraTunggakanPinjamanPersekutuan() {
              var BakiTunggakanPinjamanSemasa = parseInt(document.getElementById('BakiTunggakanPersekutuan').value);
              var PokokBakiTunggakanPersekutuan = parseInt(document.getElementById('PokokTunggakanPersekutuan').value);
              var FaedahBakiTunggakanPersekutuan = parseInt(document.getElementById('FaedahTunggakanPersekutuan').value);


              var addTunggakan = PokokBakiTunggakanPersekutuan + FaedahBakiTunggakanPersekutuan;
              var JumlahBakiTunggakanPersekutuan = BakiTunggakanPinjamanSemasa + addTunggakan;
              var str = JumlahBakiTunggakanPersekutuan.toString();
              document.getElementById('BakiTunggakanBaharuPersekutuan').value = 'RM ' + str;
            }

            function KiraJumlahSemasaKerajaanNegeri() {
              var PokokBayaranSehingga = parseInt(document.getElementById('PokokBayaranKerajaanNegeri').value);
              var FaedahBayaranSehingga = parseInt(document.getElementById('FaedahBayaranKerajaanNegeri').value);
              var result = PokokBayaranSehingga + FaedahBayaranSehingga;
              var str = result.toString();

              document.getElementById('JumlahBayaranKerajaanNegeri').value = 'RM ' + str;
            }

            function KiraJumlahTahunanKerajaanNegeri() {
              var PokokBayaranTahunan = parseInt(document.getElementById('PokokBayaranBulananKerajaanNegeri').value);
              var FaedahBayaranTahunan = parseInt(document.getElementById('FaedahBayaranBulananKerajaanNegeri').value);
              var result = PokokBayaranTahunan + FaedahBayaranTahunan;
              var str = result.toString();

              document.getElementById('JumlahBayaranBulananKerajaanNegeri').value = 'RM ' + str;
            }

            function KiraJumlahSemasaPersekutuan() {
              var PokokBayaranSehingga = parseInt(document.getElementById('PokokBayaranPersekutuan').value);
              var FaedahBayaranSehingga = parseInt(document.getElementById('FaedahBayaranPersekutuan').value);
              var result = PokokBayaranSehingga + FaedahBayaranSehingga;
              var str = result.toString();

              document.getElementById('JumlahBayaranPersekutuan').value = 'RM ' + str;
            }

            function KiraJumlahTahunanPersekutuan() {
              var PokokBayaranTahunan = parseInt(document.getElementById('PokokBayaranBulananPersekutuan').value);
              var FaedahBayaranTahunan = parseInt(document.getElementById('FaedahBayaranBulananPersekutuan').value);
              var result = PokokBayaranTahunan + FaedahBayaranTahunan;
              var str = result.toString();

              document.getElementById('JumlahBayaranBulananPersekutuan').value = 'RM ' + str;
            }

            function KiraJumlahTunggakanKerajaanNegeri() {
              var PokokTunggakan = parseInt(document.getElementById('PokokBakiTunggakanKerajaanNegeri').value);
              var FaedahTunggakan = parseInt(document.getElementById('FaedahBakiTunggakanKerajaanNegeri').value);
              var result = PokokTunggakan + FaedahTunggakan;
              var str = result.toString();

              document.getElementById('JumlahTunggakanKerajaanNegeri').value = 'RM ' + str;
            }

            function KiraJumlahTunggakanPersekutuan() {
              var PokokTunggakan = parseInt(document.getElementById('PokokTunggakanPersekutuan').value);
              var FaedahTunggakan = parseInt(document.getElementById('FaedahTunggakanPersekutuan').value);
              var result = PokokTunggakan + FaedahTunggakan;
              var str = result.toString();

              document.getElementById('JumlahTunggakanPersekutuan').value = 'RM ' + str;
            }

            function KiraSumbanganPendapatan() {
              var JumlahPendapatan = parseInt(document.getElementById('JumlahPendapatanKerajaanNegeri').value);
              var result = JumlahPendapatan * 0.02;
              var str = result.toString();
              document.getElementById('AmaunSumbanganPendapatan').value = 'RM ' + str;
            }

            function KiraSumbanganKeuntungan() {
              var JumlahKeuntungan = parseInt(document.getElementById('JumlahKeuntunganProjek').value);
              var result = JumlahKeuntungan * 0.10;
              var str = result.toString();
              document.getElementById('AmaunSumbanganKeuntungan').value = 'RM ' + str;
            }

            function CommaThousand() {
              var input = document.getElementById('PinjamanAsalKerajaanNegeri');
              var value = input.value.replace(/,/g, '');
              var input1 = document.getElementById('BakiPinjamanPokokKerajaanNegeri');
              var value1 = input1.value.replace(/,/g, '');
              var input2 = document.getElementById('PokokBayaranKerajaanNegeri');
              var value2 = input2.value.replace(/,/g, '');
              var input3 = document.getElementById('FaedahBayaranKerajaanNegeri');
              var value3 = input3.value.replace(/,/g, '');
              var input4 = document.getElementById('JumlahBayaranKerajaanNegeri');
              var value4 = input4.value.replace(/,/g, '');
              var input5 = document.getElementById('PokokBayaranBulananKerajaanNegeri');
              var value5 = input5.value.replace(/,/g, '');
              var input6 = document.getElementById('FaedahBayaranBulananKerajaanNegeri');
              var value6 = input6.value.replace(/,/g, '');
              var input7 = document.getElementById('JumlahBayaranBulananKerajaanNegeri');
              var value7 = input7.value.replace(/,/g, '');
              var input8 = document.getElementById('BakiPinjamanPokokBaharuKerajaanNegeri');
              var value8 = input8.value.replace(/,/g, '');
              var input9 = document.getElementById('BakiTunggakanKerajaanNegeri');
              var value9 = input9.value.replace(/,/g, '');
              var input10 = document.getElementById('PokokBakiTunggakanKerajaanNegeri');
              var value10 = input10.value.replace(/,/g, '');
              var input11 = document.getElementById('FaedahBakiTunggakanKerajaanNegeri');
              var value11 = input11.value.replace(/,/g, '');
              var input12 = document.getElementById('JumlahTunggakanKerajaanNegeri');
              var value12 = input12.value.replace(/,/g, '');
              var input13 = document.getElementById('BakiTunggakanBaharuKerajaanNegeri');
              var value13 = input13.value.replace(/,/g, '');
              var formattedValue = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue1 = value1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue2 = value2.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue3 = value3.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue4 = value4.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue5 = value5.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue6 = value6.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue7 = value7.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue8 = value8.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue9 = value9.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue10 = value10.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue11 = value11.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue12 = value12.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              var formattedValue13 = value13.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              input.value = formattedValue;
              input1.value = formattedValue1;
              input2.value = formattedValue2;
              input3.value = formattedValue3;
              input4.value = formattedValue4;
              input5.value = formattedValue5;
              input6.value = formattedValue6;
              input7.value = formattedValue7;
              input8.value = formattedValue8;
              input9.value = formattedValue9;
              input10.value = formattedValue10;
              input11.value = formattedValue11;
              input12.value = formattedValue12;
              input13.value = formattedValue13;
            }

            function addNewRow() {

              table.row
                      .add([
                        counter,
                        '<input type="text" class="form-control">',
                        '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>',
                        '<input type="text" class="form-control">'
                      ])
                      .draw(false);

              counter++;
            }
            let counter = 1;
            document.querySelector('#addRowSemasa').addEventListener('click', addNewRow);

            function addNewRow1() {

              table1.row
                      .add([
                        counter1,
                        '<input type="text" class="form-control">',
                        '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>',
                        '<input type="text" class="form-control">'
                      ])
                      .draw(false);

              counter1++;
            }
            let counter1 = 1;
            document.querySelector('#addRowTetap').addEventListener('click', addNewRow1);

            function addNewRow2() {

              table2.row
                      .add([
                        counter2,
                        '<input type="text" class="form-control">',
                        '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>',
                        '<input type="text" class="form-control">'
                      ])
                      .draw(false);

              counter2++;
            }
            let counter2 = 1;
            document.querySelector('#addRowPanjang').addEventListener('click', addNewRow2);

            function addNewRow3() {

              table3.row
                      .add([
                        counter3,
                        '<input type="text" class="form-control">',
                        '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>',
                        '<input type="text" class="form-control">'
                      ])
                      .draw(false);

              counter3++;
            }
            let counter3 = 1;
            document.querySelector('#addRowPendek').addEventListener('click', addNewRow3);

            function submitForm() {
              document.getElementById("registration").submit();
              
            }
//            onInputClick = (event) => {
//              event.target.value = ''
//            }
//
//                  <input type="file" onChange={onFileChanged} onClick={onInputClick} />

          </script>

          </body>
          </html>

          <!--
                                            function SumAset() {

                                                var totalSalary = table.column(3).data().sum();
                                                $('#JumlahAset').val(totalSalary);
                                            }

                                            document.querySelector('#addRowSemasa').addEventListener('click', SumAset);
           Automatically add a first row of data
          addNewRow();-->

          <!--                  <div class="row">
                                <div class="col">
                                    <h2> Maklumat Anak Syarikat</h2>
                                 <label for="BoolAnakSyarikat" class="col col-form-label">Adakah Agensi Anda Mempunyai Anak Syarikat?</label>   
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="option1" onclick="toggleInputField()" required>
                                  <label class="form-check-label" for="BoolAnakSyarikatYa">
                                  Ya
                                  </label>
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="option2" onclick="toggleInputField()" required>
                                  <label class="form-check-label" for="BoolAnakSyarikatTidak">
                                  Tidak
                                  </label>
                            </div>-->

             <!--                  <div class="row">
                                   <div class="col">
                                       <h2> Nilai Aset Semasa & Tetap</h2>
                                       <table>
                                           <tr>
                                               <td><label for="JenisAset" class="col col-form-label">Jenis Aset</label></td>
                                               <td><label for="NilaiAset" class="col col-form-label">Nilai Aset</label></td>
                                               <td><label for="Jumlah Aset" class="col col-form-label">Jumlah Nilai Aset</label></td>
                                           </tr>
                               <label for="JenisAset" class="col col-form-label">Jenis Aset</label>
                                 <input type="text" class="form-control" required>
                               </div>
                               </div>
                                   <div class="row">
                                   <div class="col">
                               <label for="NilaiAset" class="col col-form-label">Nilai Aset</label>
                                 <input type="text" class="form-control" required>
                               </div>
                               </div>
                                   <div class="row">
                                   <div class="col">
                               <label for="Jumlah Aset" class="col col-form-label">Jumlah Nilai Aset</label>
                                 <input type="text" class="form-control" required>
                               </div>
                               </div>          -->

<!--            <th scope="row">1</th>
                    <td><input type="text" class="form-control"></td>
                    <td><select onchange="handleDropdown(this)">
                            <option value="Option 1">Bangunan</option>
                            <option value="Option 2">Tanah</option>
                            <option value="Option 3">Perkhidmatan</option>
                        </select></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>-->

             <!--<div class="row"> 
             <div class="col">
             <label for="NamaAnakSyarikat" class="col col-form-label" id="NamaAnakSyarikatLabel" style="display: none;" >Nama Anak Syarikat</label>
             <input type="text" class="form-control" id="NamaAnakSyarikatInput" style="display: none;" required>
             </div>
             </div>
             <div class="row">
                                                                         <div class="col">
                                                                             <label for="AlamatAnakSyarikat" class="col col-form-label" id="AlamatAnakSyarikatLabel" style="display: none;" >Alamat Berdaftar</label>
                                                                             <textarea class="form-control" rows="3" id="AlamatAnakSyarikatInput" style="display: none;" required></textarea>
                                                                         </div>
                                                                     </div>
                                                                     <div class="row">
                                                                         <div class="col">

                                                                <label for="NamaHubungiAnakSyarikat" class="col col-form-label" id="NamaHubungiAnakSyarikatLabel" style="display: none;">Nama Pengurus Besar/Ketua Pegawai Eksekutif</label>
                                                                <input type="text" class="form-control" id="NamaHubungiAnakSyarikatInput" style="display: none;" required>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="NomborTelefonAnakSyarikat" class="col col-form-label" id="NomborTelefonAnakSyarikatLabel" style="display: none;">Nombor Telefon</label>
                                                                <input type="text" class="form-control" id="NomborTelefonAnakSyarikatInput" style="display: none;"  required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="AlamatEmelAnakSyarikat" class="col col-form-label" id="AlamatEmelAnakSyarikatLabel" style="display: none;">Emel Agensi</label>
                                                                <input type="email" class="form-control" id="AlamatEmelAnakSyarikatInput" style="display: none;" required>
                                                            </div>
                                                        </div>-->

             <!--$(document).ready(function () {
             var table = $('#TableAsetSemasa').DataTable({
             columnDefs: [{
             orderable: false,
             targets: 0
             }],
             order: [[1, 'asc']],
             createdRow: function (row, data, dataIndex) {
             $(row).find('td:first-child').html(dataIndex + 1);
             }
             });
             var rowsData = [
             ['', '<input type="text" class="form-control">', '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>', '<input type="text" class="form-control">', '<input type="text" class="form-control">'],
             ];
             table.rows.add(rowsData).draw();
             $('#addbtn').on('click', function () {
             var rowData = ['', '<input type="text" class="form-control">', '<select class="form-select" aria-label="Default select example" required><option value="bangunan">Bangunan</option><option value="Tanah">Tanah</option><option value="Perkhidmatan">Perkhidmatan</option></select>', '<input type="text" class="form-control">', '<input type="text" class="form-control">'];
             table.row.add(rowData).draw();
             });
             });-->
             <!-- <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             Start Bootstrap
             </div>-->

<!--<script>
                                  function KiraJumlahPendapatan() {
                                      var input1 = document.getElementById("JumlahPendapatan").value;
                                      var result = input1 * 0.02;
                                      document.getElementById("resultPendapatan").value = 'RM ' + result;
                                  }
                                  function KiraProjekUsahama() {
                                      var input1 = document.getElementById("ProjekUsahama").value;
                                      var result = input1 * 0.10;
                                      document.getElementById("resultProjek").value = 'RM ' + result;
                                  }
                                  function KiraTunggakan() {
                                      var input1 = document.getElementById("PokokSemasa").value;
                                      var input2 = document.getElementById("FaedahSemasa").value;
                                      var result = parseInt(input1) + parseInt(input2);
                                      document.getElementById("JumlahTunggakan").value = "RM " + result;

                                  }

</script>-->