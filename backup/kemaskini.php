<?php
include ('conn.php');
session_start();

if(isset($_POST['submit'])){
$var_value = $_SESSION['varname'];
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
$EmelBadanBerkanun =$_POST['AlamatEmelBadanBerkanunInput'];
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
$JumlahTunggakanP = $_POST['JumlahTunggakanPersekutuan'];
$BakiTunggakanBaharuP = $_POST['BakiTunggakanBaharuPersekutuan'];
$JumlahPendapatanKN = $_POST['JumlahPendapatanKerajaanNegeri'];
$TarikhSumbanganPendapatan = $_POST['TarikhSumbanganPendapatan'];
$AmaunSumbanganPendapatan = $_POST['AmaunSumbanganPendapatan'];
$BuktiSumbanganPendapatan = $_POST['BuktiSumbanganPendapatan'];
$JumlahKeuntunganProjek = $_POST['JumlahKeuntunganProjek'];
$TarikhSumbanganKeuntungan = $_POST['TarikhSumbanganKeuntungan'];
$AmaunSumbanganKeuntungan = $_POST['AmaunSumbanganKeuntungan'];
$BuktiSumbanganKeuntungan = $_POST['BuktiSumbanganKeuntungan'];

// Update form data into database



$sql = "UPDATE infoagensi SET NamaAgensi='$NamaAgensi', AlamatAgensi='$AlamatAgensi', NamaHubungiAgensi='$NamaHubungiAgensi', NomborTelefonAgensi='$NomborTelefonAgensi', EmelAgensi='$EmelAgensi', Taklukan='$Taklukan', NamaBadanBerkanun='$NamaBadanBerkanun', AlamatBadanBerkanun='$AlamatBadanBerkanun', NamaHubungiBadanBerkanun='$NamaHubungiBadanBerkanun', NomborTelefonBadanBerkanun='$NomborTelefonBadanBerkanun', EmelBadanBerkanun='$EmelBadanBerkanun', PenyataKewangan='$PenyataKewangan',PerancanganPerniagaan='$PerancanganPeniagaaan',CartaOrganisasi='$CartaOrganisasi',CartaAhliPerlembagaanPengarah='$CartaAhliPerlembagaanPengarah',TarikhPelantikan='$TarikhPelantikan',PinjamanAsalKN='$PinjamanAsalKN',TarikhBakiPinjamanPokokKN='$TarikhBakiPinjamanSemasaKN',BakiPinjamanPokokKN='$BakiPinjamanPokokKN',TarikhBayaranSehinggaKN='$TarikhBayaranKN',PokokBayaranSehinggaKN='$PokokBayaranKN',FaedahBayaranSehinggaKN='$FaedahBayaranKN',JumlahBayaranSehinggaKN='$JumlahBayaranKN',TarikhBayaranBulananKN='$TarikhBayaranBulananKN',PokokBayaranBulananKN='$PokokBayaranBulananKN',FaedahBayaranBulananKN='$FaedahBayaranBulananKN',JumlahBayaranBulananKN='$JumlahBayaranBulananKN',BakiPinjamanPokokBaharuKN='$BakiPinjamanPokokBaharuKN',TarikhTunggakanSehinggaKN='$TarikhTunggakanKN',BakiTunggakanSemasaKN='$BakiTunggakanKN',TarikhTunggakanSemasaKN='$TarikhTunggakanPokokKN',PokokTunggakanSemasaKN='$PokokBakiTunggakanKN',FaedahTunggakanSemasaKN='$FaedahBakiTunggakanKN',JumlahTunggakanKN='$JumlahTunggakanKN',BakiTunggakanBaharuKN='$BakiTunggakanBaharuKN',PinjamanAsalP='$PinjamanAsalP',TarikhBakiPinjamanPokokP='$TarikhBakiPinjamanSemasaP',BakiPinjamanPokokP='$BakiPinjamanPokokP',TarikhBayaranSehinggaP='$TarikhBayaranP',PokokBayaranSehinggaP='$PokokBayaranP',FaedahBayaranSehinggaP='$FaedahBayaranP',JumlahBayaranSehinggaP='$JumlahBayaranP',TarikhBayaranBulananP='$TarikhBayaranBulananP',PokokBayaranBulananP='$PokokBayaranBulananP',FaedahBayaranBulananP='$FaedahBayaranBulananP',JumlahBayaranBulananP='$JumlahBayaranBulananP',BakiPinjamanPokokBaharuP='$BakiPinjamanPokokBaharuP',TarikhTunggakanSehinggaP='$TarikhTunggakanP',BakiTunggakanSemasaP='$BakiTunggakanP',TarikhTunggakanSemasaP='$TarikhTunggakanPokokP',PokokTunggakanSemasaP='$PokokBakiTunggakanP',FaedahTunggakanSemasaP='$FaedahBakiTunggakanP',JumlahTunggakanP='$JumlahTunggakanP',BakiTunggakanBaharuP='$BakiTunggakanBaharuP',JumlahPendapatanSemasaDP='$JumlahPendapatanKN',TarikhSumbanganDP='$TarikhSumbanganPendapatan',AmaunSumbanganDP='$AmaunSumbanganPendapatan',BuktiSumbanganDP='$BuktiSumbanganPendapatan',JumlahKeuntunganSemasaSP='$JumlahKeuntunganProjek',TarikhSumbanganSP='$TarikhSumbanganKeuntungan',AmaunSumbanganSP='$AmaunSumbanganKeuntungan',BuktiSumbanganSP='$BuktiSumbanganKeuntungan' WHERE ID=$var_value ";
$result = mysqli_query($conn, $sql);

if ($result) {

  echo "Form data updated successfully";
  header('location:Agensi_Senarai.php');
}

else {
  echo mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
}
?>