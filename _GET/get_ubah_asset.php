<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
	// panggil file config.php untuk koneksi ke database
	require_once "../config/config.php";
	// jika tombol get ubah diklik
    if (isset($_GET['id_asset'])) {
    	// ambil data get dari ajax
    	$id_asset = $_GET['id_asset'];
		// perintah query untuk menampilkan data dari tabel Asset berdasarkan id_asset
		$result = $mysqli->query("SELECT * FROM tbl_asset WHERE id_asset='$id_asset'")
		                          or die('Ada kesalahan pada query tampil data Asset: '.$mysqli->error);
		$data = $result->fetch_assoc();
	}
	// tutup koneksi
	$mysqli->close(); 
	 
	echo json_encode($data); 
} else {
    echo '<script>window.location="index.php"</script>';
}
?>