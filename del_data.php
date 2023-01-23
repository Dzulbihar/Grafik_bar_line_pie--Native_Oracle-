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

	// $query = "INSERT INTO ARUS_BONGKAR_MUAT (ID,LOKASI,TAHUN,BULAN,SHIPCALL,GT,IF20,IF40,IF45,IE20,IE40,IE45,EF20,EF40,EF45,EE20,EE40,EE45) 
	        
	//                     VALUES ('$ID','$LOKASI','$TAHUN','$BULAN','$SHIPCALL','$GT','$IF20','$IF40','$IF45','$IE20','$IE40','$IE45','$EF20','$EF40','$EF45','$EE20','$EE40','$EE45')";
	
		$query = "delete ARUS_BONGKAR_MUAT 
		     WHERE SHIPCALL=111";



	$statement = oci_parse($koneksi,$query);

	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);

	if ($res) {
	    // pesan jika data tersimpan
	    echo "<script>alert('Data Arus Bongkar Muat berhasil ditambahkan'); 
		window.location.href='entri_data.php'</script>";
	  } else {
	    // pesan jika data gagal disimpan
	    echo "<script>alert('Data Arus Bongkar Muat gagal ditambahkan');
		window.location.href='entri_data.php'</script>";
	  }
} 

else {
//jika coba akses langsung halaman ini akan diredirect ke halaman index
	// header('Location: entri_data.php'); 
}

 
?>