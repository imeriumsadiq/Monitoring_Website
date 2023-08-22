<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$NamaAgensi = $_REQUEST['NamaAgensidanAnakSyarikatInput'];
$AlamatAgensi = $_REQUEST['AlamatAgensidanAnakSyarikatInput'];
$NamaHubungiAgensi = $_REQUEST['NamaHubungiAgensidanAnakSyarikatInput'];
$NomborTelefonAgensi = $_REQUEST['NomborTelefonAgensidanAnakSyarikatInput'];
$EmelAgensi = $_REQUEST['AlamatEmelAgensidanAnakSyarikatInput'];
$Taklukan = $_REQUEST['TaklukanSyarikatSelect'];
$NamaBadanBerkanun = $_REQUEST['NamaBadanBerkanunInput'];
$AlamatBadanBerkanun = $_REQUEST['AlamatBadanBerkanunInput'];
$NamaHubungiBadanBerkanun = $_REQUEST['NamaHubungiBadanBerkanunInput'];
$NomborTelefonBadanBerkanun = $_REQUEST['NomborTelefonBadanBerkanunInput'];
$EmelBadanBerkanun =$_REQUEST['AlamatEmelBadanBerkanunInput'];
$PenyataKewangan = $_REQUEST['PenyataKewangan'];
$PerancanganPeniagaaan = $_REQUEST['PerancanganPeniagaan'];
$CartaOrganisasi = $_REQUEST['CartaOrganisasi'];
$CartaAhliPerlembagaanPengarah = $_REQUEST['CartaAhliPerlembagaanPengarah'];
$TarikhPelantikan = $_REQUEST['TarikhPelantikan'];
$PinjamanAsalKN = $_REQUEST['PinjamanAsalKerajaanNegeri'];
$TarikhBakiPinjamanSemasaKN = $_REQUEST['TarikhBakiPinjamanSemasaKerajaanNegeri'];
$BakiPinjamanPokokKN = $_REQUEST['BakiPinjamanPokokKerajaanNegeri'];
$TarikhBayaranKN = $_REQUEST['TarikhBayaranKerajaanNegeri'];
$PokokBayaranKN = $_REQUEST['PokokBayaranKerajaanNegeri'];
$FaedahBayaranKN = $_REQUEST['FaedahBayaranKerajaanNegeri'];
$JumlahBayaranKN = $_REQUEST['JumlahBayaranKerajaanNegeri'];
$TarikhBayaranBulananKN = $_REQUEST['TarikhBayaranBulananKerajaanNegeri'];
$PokokBayaranBulananKN = $_REQUEST['PokokBayaranBulananKerajaanNegeri'];
$FaedahBayaranBulananKN = $_REQUEST['FaedahBayaranBulananKerajaanNegeri'];
$JumlahBayaranBulananKN = $_REQUEST['JumlahBayaranBulananKerajaanNegeri'];
$BakiPinjamanPokokBaharuKN = $_REQUEST['BakiPinjamanPokokBaharuKerajaanNegeri'];
$TarikhTunggakanKN = $_REQUEST['TarikhTunggakanKerajaanNegeri'];
$BakiTunggakanKN = $_REQUEST['BakiTunggakanKerajaanNegeri'];
$TarikhTunggakanPokokKN = $_REQUEST['TarikhTunggakanPokokKerajaanNegeri'];
$PokokBakiTunggakanKN = $_REQUEST['PokokBakiTunggakanKerajaanNegeri'];
$FaedahBakiTunggakanKN = $_REQUEST['FaedahBakiTunggakanKerajaanNegeri'];
$JumlahTunggakanKN = $_REQUEST['JumlahTunggakanKerajaanNegeri'];
$BakiTunggakanBaharuKN = $_REQUEST['BakiTunggakanBaharuKerajaanNegeri'];
$PinjamanAsalP = $_REQUEST['PinjamanAsalPersekutuan'];
$TarikhBakiPinjamanSemasaP = $_REQUEST['TarikhBakiPinjamanSemasaPersekutuan'];
$BakiPinjamanPokokP = $_REQUEST['BakiPinjamanPokokPersekutuan'];
$TarikhBayaranP = $_REQUEST['TarikhBayaranSehinggaPersekutuan'];
$PokokBayaranP = $_REQUEST['PokokBayaranPersekutuan'];
$FaedahBayaranP = $_REQUEST['FaedahBayaranPersekutuan'];
$JumlahBayaranP = $_REQUEST['JumlahBayaranPersekutuan'];
$TarikhBayaranBulananP = $_REQUEST['TarikhBayaranBulananPersekutuan'];
$PokokBayaranBulananP = $_REQUEST['PokokBayaranBulananPersekutuan'];
$FaedahBayaranBulananP = $_REQUEST['FaedahBayaranBulananPersekutuan'];
$JumlahBayaranBulananP = $_REQUEST['JumlahBayaranBulananPersekutuan'];
$BakiPinjamanPokokBaharuP = $_REQUEST['BakiPinjamanPokokBaharuPersekutuan'];
$TarikhTunggakanP = $_REQUEST['TarikhTunggakanPersekutuan'];
$BakiTunggakanP = $_REQUEST['BakiTunggakanPersekutuan'];
$TarikhTunggakanPokokP = $_REQUEST['TarikhTunggakanPokokPersekutuan'];
$PokokBakiTunggakanP = $_REQUEST['PokokTunggakanPersekutuan'];
$FaedahBakiTunggakanP = $_REQUEST['FaedahTunggakanPersekutuan'];
$JumlahTunggakanP = $_REQUEST['JumlahTunggakanPersekutuan'];
$BakiTunggakanBaharuP = $_REQUEST['BakiTunggakanBaharuPersekutuan'];
$JumlahPendapatanKN = $_REQUEST['JumlahPendapatanKerajaanNegeri'];
$TarikhSumbanganPendapatan = $_REQUEST['TarikhSumbanganPendapatan'];
$AmaunSumbanganPendapatan = $_REQUEST['AmaunSumbanganPendapatan'];
$BuktiSumbanganPendapatan = $_REQUEST['BuktiSumbanganPendapatan'];
$JumlahKeuntunganProjek = $_REQUEST['JumlahKeuntunganProjek'];
$TarikhSumbanganKeuntungan = $_REQUEST['TarikhSumbanganKeuntungan'];
$AmaunSumbanganKeuntungan = $_REQUEST['AmaunSumbanganKeuntungan'];
$BuktiSumbanganKeuntungan = $_REQUEST['BuktiSumbanganKeuntungan'];

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "sistempemantauanagensi");

// Insert form data into database
$sql = "INSERT INTO infoagensi (NamaAgensi,AlamatAgensi,NamaHubungiAgensi,NomborTelefonAgensi,EmelAgensi,Taklukan,NamaBadanBerkanun,AlamatBadanBerkanun,NamaHubungiBadanBerkanun,NomborTelefonBadanBerkanun,EmelBadanBerkanun,PenyataKewangan,PerancanganPerniagaan,CartaOrganisasi,CartaAhliPerlembagaanPengarah,TarikhPelantikan,PinjamanAsalKN,TarikhBakiPinjamanPokokKN,BakiPinjamanPokokKN,TarikhBayaranSehinggaKN,PokokBayaranSehinggaKN,FaedahBayaranSehinggaKN,JumlahBayaranSehinggaKN,TarikhBayaranBulananKN,PokokBayaranBulananKN,FaedahBayaranBulananKN,JumlahBayaranBulananKN,BakiPinjamanPokokBaharuKN,TarikhTunggakanSehinggaKN,BakiTunggakanSemasaKN,TarikhTunggakanSemasaKN,PokokTunggakanSemasaKN,FaedahTunggakanSemasaKN,JumlahTunggakanKN,BakiTunggakanBaharuKN,PinjamanAsalP,TarikhBakiPinjamanPokokP,BakiPinjamanPokokP,TarikhBayaranSehinggaP,PokokBayaranSehinggaP,FaedahBayaranSehinggaP,JumlahBayaranSehinggaP,TarikhBayaranBulananP,PokokBayaranBulananP,FaedahBayaranBulananP,JumlahBayaranBulananP,BakiPinjamanPokokBaharuP,TarikhTunggakanSehinggaP,BakiTunggakanSemasaP,TarikhTunggakanSemasaP,PokokTunggakanSemasaP,FaedahTunggakanSemasaP,JumlahTunggakanP,BakiTunggakanBaharuP,JumlahPendapatanSemasaDP,TarikhSumbanganDP,AmaunSumbanganDP,BuktiSumbanganDP,JumlahKeuntunganSemasaSP,TarikhSumbanganSP,AmaunSumbanganSP,BuktiSumbanganSP) VALUES ('$NamaAgensi', '$AlamatAgensi', '$NamaHubungiAgensi', '$NomborTelefonAgensi', '$EmelAgensi', '$Taklukan', '$NamaBadanBerkanun', '$AlamatBadanBerkanun', '$NamaHubungiBadanBerkanun', '$NomborTelefonBadanBerkanun', '$EmelBadanBerkanun', '$PenyataKewangan', '$PerancanganPeniagaaan', '$CartaOrganisasi', '$CartaAhliPerlembagaanPengarah', '$TarikhPelantikan', '$PinjamanAsalKN', '$TarikhBakiPinjamanSemasaKN', '$BakiPinjamanPokokKN', '$TarikhBayaranKN', '$PokokBayaranKN', '$FaedahBayaranKN', '$JumlahBayaranKN','$TarikhBayaranBulananKN','$PokokBayaranBulananKN','$FaedahBayaranBulananKN','$JumlahBayaranBulananKN','$BakiPinjamanPokokBaharuKN','$TarikhTunggakanKN','$BakiTunggakanKN','$TarikhTunggakanPokokKN','$PokokBakiTunggakanKN','$FaedahBakiTunggakanKN','$JumlahTunggakanKN','$BakiTunggakanBaharuKN','$PinjamanAsalP','$TarikhBakiPinjamanSemasaP','$BakiPinjamanPokokP','$TarikhBayaranP','$PokokBayaranP','$FaedahBayaranP','$JumlahBayaranP','$TarikhBayaranBulananP','$PokokBayaranBulananP','$FaedahBayaranBulananP','$JumlahBayaranBulananP','$BakiPinjamanPokokBaharuP','$TarikhTunggakanP','$BakiTunggakanP','$TarikhTunggakanPokokP','$PokokBakiTunggakanP','$FaedahBakiTunggakanP','$JumlahTunggakanP','$BakiTunggakanBaharuP','$JumlahPendapatanKN','$TarikhSumbanganPendapatan','$AmaunSumbanganPendapatan','$BuktiSumbanganPendapatan','$JumlahKeuntunganProjek','$TarikhSumbanganKeuntungan','$AmaunSumbanganKeuntungan','$BuktiSumbanganKeuntungan')";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "Form data inserted successfully";
} else {
  echo mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>