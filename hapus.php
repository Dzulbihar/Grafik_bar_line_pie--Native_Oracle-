<?php 
// koneksi database
require_once 'koneksi.php';
// cek id
if (!isset($_GET['ID'])) {
  $ID = $_GET['id'];
	$sql = "delete from ARUS_BONGKAR_MUAT where ID='$ID' ";
	$parsesql = oci_parse($koneksi, $sql);
	$q = oci_execute($parsesql) or die(oci_error());
	
  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='entri_data.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data gagal dihapus'); window.location.href='entri_data.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:entri_data.php');
}

?>