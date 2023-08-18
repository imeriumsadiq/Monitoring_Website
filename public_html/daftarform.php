<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$NamaAgensi = $_POST['NamaAgensidanAnakSyarikatInput'];
$AlamatAgensi = $_POST['AlamatAgensidanAnakSyarikatInput'];
$NamaHubungiAgensi = $_POST['NamaHubungiAgensidanAnakSyarikatInput'];
$NomborTelefonAgensi = $_POST['NomborTelefonAgensidanAnakSyarikatInput'];
$EmelAgensi = $_POST['AlamatEmelAgensidanAnakSyarikatInput'];
$Taklukan = $_POST['TaklukanSyarikatSelect'];
$NamaBadanBerkanun = $_POST['NamaBadanBerkanunInput'];
$AlamatBadanBerkanun = $_POST['AlamatBadanBerkanunInput'];
$NamaHubungiBadanBerkanun = $_POST['NamaHubungiBadanBerkanunInput'];
$NomborTelefonBadanBerkanun = $_POST['NomborTelefonBadanBerkanunInput'];
$EmelBadanBerkanun = $_POST['AlamatEmelBadanBerkanunInput'];
$PenyataKewangan = $_POST['PenyataKewangan'];
$PerancanganPeniagaaan = $_POST['PerancanganPeniagaan'];
$CartaOrganisasi = $_POST['CartaOrganisasi'];
$CartaAhliPerlembagaanPengarah = $_POST['CartaAhliPerlembagaanPengarah'];
$TarikhPelantikan = $_POST['TarikhPelantikan'];
$PinjamanAsalKN = $_POST['PinjamanAsalKerajaanNegeri'];
$TarikhBakiPinjamanSemasaKN = $_POST['TarikhBakiPinjamanSemasaKerajaanNegeri'];
$BakiPinjamanPokokKN = $_POST['BakiPinjamanPokokKerajaanNegeri'];
$TarikhBayaranKN = $_POST['TarikhBayaranKerajaanNegeri'];
$PokokBayaranKN = $_POST['PokokBayaranKerajaanNegeri'];
$FaedahBayaranKN = $_POST['FaedahBayaranKerajaanNegeri'];
$JumlahBayaranKN = $_POST['JumlahBayaranKerajaanNegeri'];
$TarikhBayaranBulananKN = $_POST['TarikhBayaranBulananKerajaanNegeri'];
$PokokBayaranBulananKN = $_POST['PokokBayaranBulananKerajaanNegeri'];
$FaedahBayaranBulananKN = $_POST['FaedahBayaranBulananKerajaanNegeri'];
$JumlahBayaranBulananKN = $_POST['JumlahBayaranBulananKerajaanNegeri'];
$BakiPinjamanPokokBaharuKN = $_POST['BakiPinjamanPokokBaharuKerajaanNegeri'];
$TarikhTunggakanKN = $_POST['TarikhTunggakanKerajaanNegeri'];
$BakiTunggakanKN = $_POST['BakiTunggakanKerajaanNegeri'];
$TarikhTunggakanPokokKN = $_POST['TarikhTunggakanPokokKerajaanNegeri'];
$PokokBakiTunggakanKN = $_POST['PokokBakiTunggakanKerajaanNegeri'];
$FaedahBakiTunggakanKN = $_POST['FaedahBakiTunggakanKerajaanNegeri'];
$JumlahTunggakanKN = $_POST['JumlahTunggakanKerajaanNegeri'];
$BakiTunggakanBaharuKN = $_POST['BakiTunggakanBaharuKerajaanNegeri'];
$PinjamanAsalP = $_POST['PinjamanAsalPersekutuan'];
$TarikhBakiPinjamanSemasaP = $_POST['TarikhBakiPinjamanSemasaPersekutuan'];
$BakiPinjamanPokokP = $_POST['BakiPinjamanPokokPersekutuan'];
$TarikhBayaranP = $_POST['TarikhBayaranSehinggaPersekutuan'];
$PokokBayaranP = $_POST['PokokBayaranPersekutuan'];
$FaedahBayaranP = $_POST['FaedahBayaranPersekutuan'];
$JumlahBayaranP = $_POST['JumlahBayaranPersekutuan'];
$TarikhBayaranBulananP = $_POST['TarikhBayaranBulananPersekutuan'];
$PokokBayaranBulananP = $_POST['PokokBayaranBulananPersekutuan'];
$FaedahBayaranBulananP = $_POST['FaedahBayaranBulananPersekutuan'];
$JumlahBayaranBulananP = $_POST['JumlahBayaranBulananPersekutuan'];
$BakiPinjamanPokokBaharuP = $_POST['BakiPinjamanPokokBaharuPersekutuan'];
$TarikhTunggakanP = $_POST['TarikhTunggakanPersekutuan'];
$BakiTunggakanP = $_POST['BakiTunggakanPersekutuan'];
$TarikhTunggakanPokokP = $_POST['TarikhTunggakanPokokPersekutuan'];
$PokokBakiTunggakanP = $_POST['PokokTunggakanPersekutuan'];
$FaedahBakiTunggakanP = $_POST['FaedahTunggakanPersekutuan'];
$JumlahTunggakanKN = $_POST['JumlahTunggakanPersekutuan'];
$BakiTunggakanBaharuP = $_POST['BakiTunggakanBaharuPersekutuan'];
$JumlahPendapatanKN = $_POST['JumlahPendapatanKerajaanNegeri'];
$TarikhSumbanganPendapatan = $_POST['TarikhSumbanganPendapatan'];
$AmaunSumbanganPendapatan = $_POST['AmaunSumbanganPendapatan'];
$BuktiSumbanganPendapatan = $_POST['BuktiSumbanganPendapatan'];
$JumlahKeuntunganProjek = $_POST['JumlahKeuntunganProjek'];
$TarikhSumbanganKeuntungan = $_POST['TarikhSumbanganKeuntungan'];
$AmaunSumbanganKeuntungan = $_POST['AmaunSumbanganKeuntungan'];
$BuktiSumbanganKeuntungan = $_POST['BuktiSumbanganKeuntungan'];

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "sistempemantauanagensi");

// Insert form data into database
$sql = "INSERT INTO infoagensi (ID,NamaAgensi,AlamatAgensi,NamaHubungiAgensi,NomborTelefonAgensi,EmelAgensi,Taklukan,NamaBadanBerkanun,AlamatBadanBerkanun,NamaHubungiBadanBerkanun,NomborTelefonBadanBerkanun,EmelBadanBerkanun,PenyataKewangan,PerancanganPerniagaan,CartaOrganisasi,CartaAhliPerlembagaanPengarah,TarikhPelantikan,PinjamanAsalKN,TarikhBakiPinjamanPokokKN,BakiPinjamanPokokKN,TarikhBayaranSehinggaKN,PokokBayaranSehinggaKN,FaedahBayaranSehinggaKN,JumlahBayaranSehinggaKN,TarikhBayaranBulananKN,PokokBayaranBulananKN,FaedahBayaranBulananKN,JumlahBayaranBulananKN,BakiPinjamanPokokBaharuKN,TarikhTunggakanSehinggaKN,BakiTunggakanSemasaKN,TarikhTunggakanSemasaKN,PokokTunggakanSemasaKN,FaedahTunggakanSemasaKN,BakiTunggakanBaharuKN,PinjamanAsalP,TarikhBakiPinjamanPokokP,BakiPinjamanPokokP,TarikhBayaranSehinggaP,PokokBayaranSehinggaP,FaedahBayaranSehinggaP,JumlahBayaranSehinggaP,TarikhBayaranBulananP,PokokBayaranBulananP,FaedahBayaranBulananP,JumlahBayaranBulananP,BakiPinjamanPokokBaharuP,TarikhTunggakanSehinggaP,BakiTunggakanSemasaP,TarikhTunggakanSemasaP,PokokTunggakanSemasaP,FaedahTunggakanSemasaP,JumlahTunggakanBaharuP,JumlahPendapatanSemasaDP,TarikhSumbanganDP,AmaunSumbanganDP,BuktiSumbanganDP,JumlahKeuntunganSemasaSP,TarikhSumbanganSP,AmaunSumbanganSP,BuktiSumbanganSP) VALUES ('$NamaAgensi','$AlamatAgensi','$NamaHubungiAgensi','$NomborTelefonAgensi','$EmelAgensi','$Taklukan','$NamaBadanBerkanun','$AlamatBadanBerkanun','$NamaHubungiBadanBerkanun','$NomborTelefonBadanBerkanun','$EmelBadanBerkanun','$PenyataKewangan','$PerancanganPeniagaaan','$CartaOrganisasi','$CartaAhliPerlembagaanPengarah','$TarikhPelantikan','$PinjamanAsalKN','$TarikhBakiPinjamanSemasaKN','$BakiPinjamanPokokKN','$TarikhBayaranKN','$PokokBayaranKN','$FaedahBayaranKN','$JumlahBayaranKN','$TarikhBayaranBulananKN','$PokokBayaranBulananKN','$FaedahBayaranBulananKN','$JumlahBayaranBulananKN','$BakiPinjamanPokokBaharuKN','$TarikhTunggakanKN','$BakiTunggakanKN','$TarikhTunggakanPokokKN','$PokokBakiTunggakanKN','$FaedahBakiTunggakanKN','$JumlahTunggakanKN','$BakiTunggakanBaharuKN','$PinjamanAsalP','$TarikhBakiPinjamanSemasaP','$BakiPinjamanPokokP','$TarikhBayaranP','$PokokBayaranP','$FaedahBayaranP','$JumlahBayaranP','$TarikhBayaranBulananP','$PokokBayaranBulananP','$FaedahBayaranBulananP','$JumlahBayaranBulananP','$BakiPinjamanPokokBaharuP','$TarikhTunggakanP','$BakiTunggakanP','$TarikhTunggakanPokokP','$PokokBakiTunggakanP','$FaedahBakiTunggakanP','$JumlahTunggakanKN',$BakiTunggakanBaharuP,'$JumlahPendapatanKN','$TarikhSumbanganPendapatan','$AmaunSumbanganPendapatan','$BuktiSumbanganPendapatan','$JumlahKeuntunganProjek','$TarikhSumbanganKeuntungan','$AmaunSumbanganKeuntungan','$BuktiSumbanganKeuntungan')";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "Form data inserted successfully";
} else {
  echo "Error inserting form data: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>