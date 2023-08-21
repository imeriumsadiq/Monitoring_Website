
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
            <li><a class="dropdown-item" >Logout</a></li>
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

                      <form action="daftarform.php" method="post" id="registration">

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
                            <div class="row">
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
                                <input type="text" class="form-control" id="NamaAgensidanAnakSyarikatInput" name="NamaAgensidanAnakSyarikatInput" style="display: none;" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="AlamatAgensidanAnakSyarikat" class="col col-form-label" id="AlamatAgensidanAnakSyarikatLabel" style="display: none;">Alamat Berdaftar</label>
                                <textarea class="form-control" rows="3" id="AlamatAgensidanAnakSyarikatInput" name="AlamatAgensidanAnakSyarikatInput" style="display: none;" ></textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">

                                <label for="NamaHubungiAgensidanAnakSyarikat" class="col col-form-label" id="NamaHubungiAgensidanAnakSyarikatLabel" style="display: none;">Nama Pengurus Besar / Ketua Pegawai Eksekutif</label>
                                <input type="text" class="form-control" id="NamaHubungiAgensidanAnakSyarikatInput" name="NamaHubungiAgensidanAnakSyarikatInput" style="display: none;" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="NomborTelefonAgensidanAnakSyarikat" class="col col-form-label" id="NomborTelefonAgensidanAnakSyarikatLabel" style="display: none;">Nombor Telefon</label>
                                <input type="text" class="form-control" id="NomborTelefonAgensidanAnakSyarikatInput" name="NomborTelefonAgensidanAnakSyarikatInput" style="display: none;" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="AlamatEmelAgensidanAnakSyarikat" class="col col-form-label" id="AlamatEmelAgensidanAnakSyarikatLabel" style="display: none;">Emel</label>
                                <input type="email" class="form-control" id="AlamatEmelAgensidanAnakSyarikatInput" name="AlamatEmelAgensidanAnakSyarikatInput" style="display: none;" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="TaklukanSyarikatAgensidanAnakSyarikat" class="col col-form-label" id="TaklukanSyarikat" style="display: none;">Tertakluk atas</label>
                                <select class="form-select" id="TaklukanSyarikatSelect" name="TaklukanSyarikatSelect" style="display: none;">
                                  <option selected></option>
                                  <option value="Memorandum & Association">Memorandum & Association</option>
                                  <option value="Enakmen">Enakmen</option>
                                </select> 
                              </div>
                            </div>

                            <div class="row"> 
                              <div class="col">
                                <label for="NamaBadanBerkanun" class="col col-form-label" id="NamaBadanBerkanunLabel" style="display: none;" >Nama Badan Berkanun</label>
                                <input type="text" class="form-control" id="NamaBadanBerkanunInput" name="NamaBadanBerkanunInput" style="display: none;" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="AlamatBadanBerkanun" class="col col-form-label" id="AlamatBadanBerkanunLabel" style="display: none;" >Alamat Berdaftar</label>
                                <textarea class="form-control" rows="3" id="AlamatBadanBerkanunInput" name="AlamatBadanBerkanunInput" style="display: none;" ></textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">

                                <label for="NamaHubungiBadanBerkanun" class="col col-form-label" id="NamaHubungiBadanBerkanunLabel" style="display: none;">Nama Pengurus Besar/Ketua Pegawai Eksekutif</label>
                                <input type="text" class="form-control" id="NamaHubungiBadanBerkanunInput" name="NamaHubungiBadanBerkanunInput" style="display: none;" >
                              </div>

                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="NomborTelefonBadanBerkanun" class="col col-form-label" id="NomborTelefonBadanBerkanunLabel" style="display: none;">Nombor Telefon</label>
                                <input type="text" class="form-control" id="NomborTelefonBadanBerkanunInput" name="NomborTelefonBadanBerkanunInput" style="display: none;"  >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="AlamatEmelBadanBerkanun" class="col col-form-label" id="AlamatEmelBadanBerkanunLabel" style="display: none;">Emel</label>
                                <input type="email" class="form-control" id="AlamatEmelBadanBerkanunInput" name="AlamatEmelBadanBerkanunInput" style="display: none;" >
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
                                <input type="file" accept=".pdf" class="form-control" id="PenyataKewangan" name="PenyataKewangan" >
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
                                <input type="date" class="form-control" id="TarikhPelantikan" name="TarikhPelantikan" >
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
                                <input type="text" class="form-control" id="PinjamanAsalKerajaanNegeri" name="PinjamanAsalKerajaanNegeri">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBakiPinjamanSemasaKerajaanNegeri" name="TarikhBakiPinjamanSemasaKerajaanNegeri">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label"  >Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokKerajaanNegeri" name="BakiPinjamanPokokKerajaanNegeri" onkeyup="KiraBakiPinjamanPokokKerajaanNegeri()">
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
                                <input type="date" class="form-control" id="TarikhBayaranKerajaanNegeri" name="TarikhBayaranKerajaanNegeri">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="PokokBayaranSehingga" class="col col-form-label"  >Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranKerajaanNegeri" name="PokokBayaranKerajaanNegeri" onkeyup="KiraBakiPinjamanPokokKerajaanNegeri(); KiraJumlahSemasaKerajaanNegeri()">
                              </div>

                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="FaedahBayaranSehingga" class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranKerajaanNegeri" name="FaedahBayaranKerajaanNegeri" onkeyup="KiraJumlahSemasaKerajaanNegeri()">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="JumlahBayaranSehingga" class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranKerajaanNegeri" name="JumlahBayaranKerajaanNegeri" readonly> 
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
                                <input type="date" class="form-control" id="TarikhBayaranBulananKerajaanNegeri" name="TarikhBayaranBulananKerajaanNegeri">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranBulananKerajaanNegeri" name="PokokBayaranBulananKerajaanNegeri" onkeyup="KiraBakiPinjamanPokokKerajaanNegeri(); KiraJumlahTahunanKerajaanNegeri()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranBulananKerajaanNegeri" name="FaedahBayaranBulananKerajaanNegeri" onkeyup="KiraJumlahTahunanKerajaanNegeri()">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranBulananKerajaanNegeri" name="JumlahBayaranBulananKerajaanNegeri">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label"  >Baki Pinjaman Pokok Baharu</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokBaharuKerajaanNegeri" name="BakiPinjamanPokokBaharuKerajaanNegeri" readonly>
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
                                <input type="date" class="form-control" id="TarikhTunggakanKerajaanNegeri" name="TarikhTunggakanKerajaanNegeri">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiTunggakanSebelum" class="col col-form-label">Baki Tunggakan Semasa</label>
                                <input type="text" class="form-control" id="BakiTunggakanKerajaanNegeri" name="BakiTunggakanKerajaanNegeri" onkeyup="KiraTunggakanPinjamanKerajaanNegeri()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanPokokKerajaanNegeri" name="TarikhTunggakanPokokKerajaanNegeri">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokBakiTunggakanKerajaanNegeri" name="PokokBakiTunggakanKerajaanNegeri" onkeyup="KiraTunggakanPinjamanKerajaanNegeri();KiraJumlahTunggakanKerajaanNegeri()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Faedah" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahBakiTunggakanKerajaanNegeri" name="FaedahBakiTunggakanKerajaanNegeri" onkeyup="KiraTunggakanPinjamanKerajaanNegeri();KiraJumlahTunggakanKerajaanNegeri()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Jumlah" class="col col-form-label">Jumlah</label>
                                <input type="text" class="form-control" id="JumlahTunggakanKerajaanNegeri" name="JumlahTunggakanKerajaanNegeri" ">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakanSekarang" class="col col-form-label">Baki Tunggakan Baharu</label>
                                <input type="text" class="form-control" id="BakiTunggakanBaharuKerajaanNegeri" name="BakiTunggakanBaharuKerajaanNegeri" readonly>
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
                                <input type="text" class="form-control" id="PinjamanAsalPersekutuan" name="PinjamanAsalPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBakiPinjamanSemasaPersekutuan" name="TarikhBakiPinjamanSemasaPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label">Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokPersekutuan" name="BakiPinjamanPokokPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan()">
                              </div>
                            </div>
                            <br>

                            <div class="row">
                              <div class="col">
                                <h3>Bayaran Sehingga </h3>
                                <label for="TarikhBayaranSehinggaPersekutuan" class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhBayaranSehinggaPersekutuan" name="TarikhBayaranSehinggaPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="PokokBayaranSehingga" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokBayaranPersekutuan" name="PokokBayaranPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan(); KiraJumlahSemasaPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="FaedahBayaranSehingga" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahBayaranPersekutuan" name="FaedahBayaranPersekutuan" onkeyup=" KiraJumlahSemasaPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahBayaranSehingga" class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranPersekutuan" name="JumlahBayaranPersekutuan" readonly> 
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
                                <input type="date" class="form-control" id="TarikhBayaranBulananPersekutuan" name="TarikhBayaranBulananPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Pokok </label>
                                <input type="text" class="form-control" id="PokokBayaranBulananPersekutuan" name="PokokBayaranBulananPersekutuan" onkeyup="KiraBakiPinjamanPokokPersekutuan(); KiraJumlahTahunanPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Faedah </label>
                                <input type="text" class="form-control" id="FaedahBayaranBulananPersekutuan" name="FaedahBayaranBulananPersekutuan" onkeyup="KiraJumlahTahunanPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Jumlah </label>
                                <input type="text" class="form-control" id="JumlahBayaranBulananPersekutuan" name="JumlahBayaranBulananPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiPinjamanPokok" class="col col-form-label">Baki Pinjaman Pokok</label>
                                <input type="text" class="form-control" id="BakiPinjamanPokokBaharuPersekutuan" name="BakiPinjamanPokokBaharuPersekutuan">
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
                                <input type="date" class="form-control" id="TarikhTunggakanPersekutuan" name="TarikhTunggakanPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="BakiTunggakanSebelum" class="col col-form-label">Baki Tunggakan Semasa</label>
                                <input type="text" class="form-control" id="BakiTunggakanPersekutuan" name="BakiTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Tarikh</label>
                                <input type="date" class="form-control" id="TarikhTunggakanPokokPersekutuan" name="TarikhTunggakanPokokPersekutuan">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Pokok</label>
                                <input type="text" class="form-control" id="PokokTunggakanPersekutuan" name="PokokTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan();KiraJumlahTunggakanPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="Pokok" class="col col-form-label">Faedah</label>
                                <input type="text" class="form-control" id="FaedahTunggakanPersekutuan" name="FaedahTunggakanPersekutuan" onkeyup="KiraTunggakanPinjamanPersekutuan();KiraJumlahTunggakanPersekutuan()">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakan" class="col col-form-label">Jumlah Tunggakan</label>
                                <input type="text" class="form-control" id="JumlahTunggakanPersekutuan" name="JumlahTunggakanPersekutuan" >
                              </div>
                            </div>

                            <div class="row">
                              <div class="col">
                                <label for="JumlahTunggakan" class="col col-form-label">Baki Tunggakan Baharu</label>
                                <input type="text" class="form-control" id="BakiTunggakanBaharuPersekutuan" name="BakiTunggakanBaharuPersekutuan">
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
                                <input type="text" class="form-control" id="JumlahPendapatanKerajaanNegeri" name="JumlahPendapatanKerajaanNegeri" onkeyup="KiraSumbanganPendapatan()"  required>
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
                                <input type="date" class="form-control" id="TarikhSumbanganPendapatan" name="TarikhSumbanganPendapatan"> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Amaun</label>
                                <input type="text" class="form-control" id="AmaunSumbanganPendapatan" name="AmaunSumbanganPendapatan" readonly>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Bukti</label>
                                <input type="file" class="form-control" id="BuktiSumbanganPendapatan" name="BuktiSumbanganPendapatan">
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
                                <label for="JumlahPendapatan" class="col col-form-label">Jumlah Keuntungan Semasa</label>
                                <input type="text" class="form-control" id="JumlahKeuntunganProjek" name="JumlahKeuntunganProjek" onkeyup="KiraSumbanganKeuntungan()"  required>
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
                                <input type="date" class="form-control" id="TarikhSumbanganKeuntungan" name="TarikhSumbanganKeuntungan"> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Amaun</label>
                                <input type="text" class="form-control" id="AmaunSumbanganKeuntungan" name="AmaunSumbanganKeuntungan">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <label class="col col-form-label">Bukti</label>
                                <input type="file" class="form-control" id="BuktiSumbanganKeuntungan" name="BuktiSumbanganKeuntungan">
                              </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                              <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> Kembali</a>
                              <a class="btn btn-primary Daftar" href="#" onclick="submitForm()">Daftar <i class="fas fa-angle-right"></i></a>
                            </div>
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

                                  document.getElementById('BakiPinjamanPokokBaharuKerajaanNegeri').value = "RM " + result;

                                }

                                function KiraTunggakanPinjamanKerajaanNegeri() {
                                  var BakiTunggakanPinjamanSemasa = parseInt(document.getElementById('BakiTunggakanKerajaanNegeri').value);
                                  var PokokBakiTunggakanKerajaanNegeri = parseInt(document.getElementById('PokokBakiTunggakanKerajaanNegeri').value);
                                  var FaedahBakiTunggakanKerajaanNegeri = parseInt(document.getElementById('FaedahBakiTunggakanKerajaanNegeri').value);


                                  var addTunggakan = PokokBakiTunggakanKerajaanNegeri + FaedahBakiTunggakanKerajaanNegeri;
                                  var JumlahBakiTunggakanKerajaanNegeri = BakiTunggakanPinjamanSemasa + addTunggakan;
                                  
                                  document.getElementById('BakiTunggakanBaharuKerajaanNegeri').value = 'RM ' + JumlahBakiTunggakanKerajaanNegeri;
                                }

                                function KiraBakiPinjamanPokokPersekutuan() {
                                  var BakiPinjamanPokokTahunSebelum = parseInt(document.getElementById('BakiPinjamanPokokPersekutuan').value);
                                  var BayaranPokokTahunan = parseInt(document.getElementById('PokokBayaranPersekutuan').value);
                                  var BayaranPokokBulanan = parseInt(document.getElementById('PokokBayaranBulananPersekutuan').value);

                                  var result = BakiPinjamanPokokTahunSebelum - (BayaranPokokTahunan + BayaranPokokBulanan);
                                  document.getElementById('BakiPinjamanPokokBaharuPersekutuan').value = "RM " + result;

                                }

                                function KiraTunggakanPinjamanPersekutuan() {
                                  var BakiTunggakanPinjamanSemasa = parseInt(document.getElementById('BakiTunggakanPersekutuan').value);
                                  var PokokBakiTunggakanPersekutuan = parseInt(document.getElementById('PokokTunggakanPersekutuan').value);
                                  var FaedahBakiTunggakanPersekutuan = parseInt(document.getElementById('FaedahTunggakanPersekutuan').value);


                                  var addTunggakan = PokokBakiTunggakanPersekutuan + FaedahBakiTunggakanPersekutuan;
                                  var JumlahBakiTunggakanPersekutuan = BakiTunggakanPinjamanSemasa + addTunggakan;
                                  document.getElementById('BakiTunggakanBaharuPersekutuan').value = 'RM ' + JumlahBakiTunggakanPersekutuan;
                                }

                                function KiraJumlahSemasaKerajaanNegeri() {
                                  var PokokBayaranSehingga = parseInt(document.getElementById('PokokBayaranKerajaanNegeri').value);
                                  var FaedahBayaranSehingga = parseInt(document.getElementById('FaedahBayaranKerajaanNegeri').value);
                                  var result = PokokBayaranSehingga + FaedahBayaranSehingga;

                                  document.getElementById('JumlahBayaranKerajaanNegeri').value = 'RM ' + result;
                                }

                                function KiraJumlahTahunanKerajaanNegeri() {
                                  var PokokBayaranTahunan = parseInt(document.getElementById('PokokBayaranBulananKerajaanNegeri').value);
                                  var FaedahBayaranTahunan = parseInt(document.getElementById('FaedahBayaranBulananKerajaanNegeri').value);
                                  var result = PokokBayaranTahunan + FaedahBayaranTahunan;

                                  document.getElementById('JumlahBayaranBulananKerajaanNegeri').value = 'RM ' + result;
                                }

                                function KiraJumlahSemasaPersekutuan() {
                                  var PokokBayaranSehingga = parseInt(document.getElementById('PokokBayaranPersekutuan').value);
                                  var FaedahBayaranSehingga = parseInt(document.getElementById('FaedahBayaranPersekutuan').value);
                                  var result = PokokBayaranSehingga + FaedahBayaranSehingga;

                                  document.getElementById('JumlahBayaranPersekutuan').value = 'RM ' + result;
                                }

                                function KiraJumlahTahunanPersekutuan() {
                                  var PokokBayaranTahunan = parseInt(document.getElementById('PokokBayaranBulananPersekutuan').value);
                                  var FaedahBayaranTahunan = parseInt(document.getElementById('FaedahBayaranBulananPersekutuan').value);
                                  var result = PokokBayaranTahunan + FaedahBayaranTahunan;

                                  document.getElementById('JumlahBayaranBulananPersekutuan').value = 'RM ' + result;
                                }

                                function KiraJumlahTunggakanKerajaanNegeri() {
                                  var PokokTunggakan = parseInt(document.getElementById('PokokBakiTunggakanKerajaanNegeri').value);
                                  var FaedahTunggakan = parseInt(document.getElementById('FaedahBakiTunggakanKerajaanNegeri').value);
                                  var result = PokokTunggakan + FaedahTunggakan;

                                  document.getElementById('JumlahTunggakanKerajaanNegeri').value = 'RM ' + result;
                                }

                                function KiraJumlahTunggakanPersekutuan() {
                                  var PokokTunggakan = parseInt(document.getElementById('PokokTunggakanPersekutuan').value);
                                  var FaedahTunggakan = parseInt(document.getElementById('FaedahTunggakanPersekutuan').value);
                                  var result = PokokTunggakan + FaedahTunggakan;

                                  document.getElementById('JumlahTunggakanPersekutuan').value = 'RM ' + result;
                                }

                                function KiraSumbanganPendapatan() {
                                  var JumlahPendapatan = parseInt(document.getElementById('JumlahPendapatanKerajaanNegeri').value);
                                  var result = JumlahPendapatan * 0.02;
                                  document.getElementById('AmaunSumbanganPendapatan').value = 'RM ' + result;
                                }

                                function KiraSumbanganKeuntungan() {
                                  var JumlahKeuntungan = parseInt(document.getElementById('JumlahKeuntunganProjek').value);
                                  var result = JumlahKeuntungan * 0.10;
                                  document.getElementById('AmaunSumbanganKeuntungan').value = result;
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