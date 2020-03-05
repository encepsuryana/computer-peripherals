<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
	// panggil file config.php untuk koneksi ke database
	require_once "../config/config.php";

	// fungsi untuk membuat id transaksi
	//$result = $mysqli->query("SELECT RIGHT(id_transaksi,4) as kode FROM transaksi ORDER BY id_transaksi DESC LIMIT 1")
	//                          or die('Ada kesalahan pada query tampil data id_transaksi: '.$mysqli->error);
	//$rows = $result->num_rows;
	// cek id_transaksi
	//if ($rows <> 0) {
	    // mengambil data id_transaksi
	//    $data = $result->fetch_assoc();
	//    $kode = $data['kode']+1; 			// jika sudah ada id_transaksi maka nomor urut + 1
	//} else {
	//    $kode = 1;							// jika belum ada id_transaksi maka nomor urut = 1
	//}
	// buat id_transaksi
	//$tanggal      = date("Ymd");                             // Tahun-Bulan-Hari
	//$buat_id      = str_pad($kode, 4, "0", STR_PAD_LEFT);    // Nomor Urut
	//$id_transaksi = "T-$tanggal-$buat_id";
	// ambil data hasil post dari ajax
	$id_asset				= $mysqli->real_escape_string(trim($_POST['id_asset']));
	$tanggal_pemeriksaan	= $mysqli->real_escape_string(trim(date('Y-m-d', strtotime($_POST['tanggal_pemeriksaan']))));
	$no_asset				= $mysqli->real_escape_string(trim($_POST['no_asset']));
	$kategori				= $mysqli->real_escape_string(trim($_POST['kategori']));
	$nama_device			= $mysqli->real_escape_string(trim($_POST['nama_device']));
	$brand					= $mysqli->real_escape_string(trim($_POST['brand']));
	$type					= $mysqli->real_escape_string(trim($_POST['type']));
	$motherboard			= $mysqli->real_escape_string(trim($_POST['motherboard']));
	$cpu					= $mysqli->real_escape_string(trim($_POST['cpu']));
	$ram					= $mysqli->real_escape_string(trim($_POST['ram']));
	$gpu					= $mysqli->real_escape_string(trim($_POST['gpu']));
	$storage				= $mysqli->real_escape_string(trim($_POST['storage']));
	$optical_drive			= $mysqli->real_escape_string(trim($_POST['optical_drive']));
	$psu					= $mysqli->real_escape_string(trim($_POST['psu']));
	$display_unit			= $mysqli->real_escape_string(trim($_POST['display_unit']));
	$operating_system		= $mysqli->real_escape_string(trim($_POST['operating_system']));
	$komputer_type			= $mysqli->real_escape_string(trim($_POST['komputer_type']));
	$ip_address				= $mysqli->real_escape_string(trim($_POST['ip_address']));
	$mac_address			= $mysqli->real_escape_string(trim($_POST['mac_address']));
	$connectivity			= $mysqli->real_escape_string(trim($_POST['connectivity']));
	$internet				= $mysqli->real_escape_string(trim($_POST['internet']));
	$user					= $mysqli->real_escape_string(trim($_POST['user']));
	$password				= $mysqli->real_escape_string(trim($_POST['password']));
	$location				= $mysqli->real_escape_string(trim($_POST['location']));
	$link_to				= $mysqli->real_escape_string(trim($_POST['link_to']));
	$maint_date				= $mysqli->real_escape_string(trim(date('Y-m-d', strtotime($_POST['maint_date']))));

	// perintah query untuk menyimpan data ke tabel transaksi
	$insert = $mysqli->query("INSERT INTO tbl_asset(id_asset,tanggal_pemeriksaan,no_asset,kategori,nama_device,brand,type,motherboard,cpu,ram,gpu,storage,optical_drive,psu,display_unit,operating_system,komputer_type,ip_address,mac_address,connectivity,internet,user,password,location,link_to,maint_date,maint_next_date)
		VALUES('$id_asset','$tanggal_pemeriksaan','$no_asset','$kategori','$nama_device','$brand','$type','$motherboard','$cpu','$ram','$gpu','$storage','$optical_drive','$psu','$display_unit','$operating_system','$komputer_type','$ip_address','$mac_address','$connectivity','$internet','$user','$password','$location','$link_to','$maint_date','$maint_date' + INTERVAL 125 DAY)")
	or die('Ada kesalahan pada query insert : '.$mysqli->error); 
	// cek query
	if ($insert) {
	    // jika berhasil tampilkan pesan berhasil simpan data
		echo "sukses";
	} else {
		// jika gagal tampilkan pesan gagal simpan data
		echo "gagal";
	}
	// tutup koneksi
	$mysqli->close();   
} else {
	echo '<script>window.location="index.php"</script>';
}
?>