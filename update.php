<?php 
// koneksi database
// include 'koneksi.php';
require_once 'koneksi.php';
// menangkap data yang di kirim dari form
if (!isset($_POST['submit'])){
	$ID = $_POST['ID'];
	$LOKASI = $_POST['LOKASI'];
	$TAHUN = $_POST['TAHUN'];
	$BULAN = $_POST['BULAN'];
	$SHIPCALL = $_POST['SHIPCALL'];
	$GT = $_POST['GT'];
	$IF20 = $_POST['IF20'];
	$IF40 = $_POST['IF40'];
	$IF45 = $_POST['IF45'];
	$IE20 = $_POST['IE20'];
	$IE40 = $_POST['IE40'];
	$IE45 = $_POST['IE45'];
	$EF20 = $_POST['EF20'];
	$EF40 = $_POST['EF40'];
	$EF45 = $_POST['EF45'];
	$EE20 = $_POST['EE20'];
	$EE40 = $_POST['EE40'];
	$EE45 = $_POST['EE45'];

	$query = "UPDATE ARUS_BONGKAR_MUAT SET LOKASI ='".$LOKASI."', TAHUN ='".$TAHUN."', BULAN ='".$BULAN."', SHIPCALL ='".$SHIPCALL."', GT ='".$GT."', IF20 ='".$IF20."', IF40 ='".$IF40."', IF45 ='".$IF45."', IE20 ='".$IE20."', IE40 ='".$IE40."', IE45 ='".$IE45."', EF20 ='".$EF20."', EF40 ='".$EF40."', EF45 ='".$EF45."', EE20 ='".$EE20."', EE40 ='".$EE40."', EE45 ='".$EE45."' WHERE ID = '".$ID."' ";

	$statement = oci_parse($koneksi,$query);

	$r = oci_execute($statement,OCI_DEFAULT);
	$res = oci_commit($koneksi);

	if ($res) {
	    // pesan jika data diubah
		echo "<script>alert('Data Arus Bongkar Muat berhasil diubah'); 
		window.location.href='entri_data.php'</script>";
	} else {
	    // pesan jika data gagal diubah
		echo "<script>alert('Data Arus Bongkar Muat gagal diubah');
		window.location.href='entri_data.php'</script>";
	}
} 

else {
//jika coba akses langsung halaman ini akan diredirect ke halaman index
	header('Location: entri_data.php'); 
}


?>