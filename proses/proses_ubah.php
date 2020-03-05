<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {
    // panggil file config.php untuk koneksi ke database
    require_once "../config/config.php";

    if (isset($_POST['id_asset'])) {
        // ambil data hasil post dari ajax
        $id_asset               = $mysqli->real_escape_string(trim($_POST['id_asset']));
        $tanggal_pemeriksaan    = $mysqli->real_escape_string(trim(date('Y-m-d', strtotime($_POST['tanggal_pemeriksaan']))));
        $no_asset               = $mysqli->real_escape_string(trim($_POST['no_asset']));
        $kategori               = $mysqli->real_escape_string(trim($_POST['kategori']));
        $nama_device            = $mysqli->real_escape_string(trim($_POST['nama_device']));
        $brand                  = $mysqli->real_escape_string(trim($_POST['brand']));
        $type                   = $mysqli->real_escape_string(trim($_POST['type']));
        $motherboard            = $mysqli->real_escape_string(trim($_POST['motherboard']));
        $cpu                    = $mysqli->real_escape_string(trim($_POST['cpu']));
        $ram                    = $mysqli->real_escape_string(trim($_POST['ram']));
        $gpu                    = $mysqli->real_escape_string(trim($_POST['gpu']));
        $storage                = $mysqli->real_escape_string(trim($_POST['storage']));
        $optical_drive          = $mysqli->real_escape_string(trim($_POST['optical_drive']));
        $psu                    = $mysqli->real_escape_string(trim($_POST['psu']));
        $display_unit           = $mysqli->real_escape_string(trim($_POST['display_unit']));
        $operating_system       = $mysqli->real_escape_string(trim($_POST['operating_system']));
        $komputer_type          = $mysqli->real_escape_string(trim($_POST['komputer_type']));
        $ip_address             = $mysqli->real_escape_string(trim($_POST['ip_address']));
        $mac_address            = $mysqli->real_escape_string(trim($_POST['mac_address']));
        $connectivity           = $mysqli->real_escape_string(trim($_POST['connectivity']));
        $internet               = $mysqli->real_escape_string(trim($_POST['internet']));
        $user                   = $mysqli->real_escape_string(trim($_POST['user']));
        $password               = $mysqli->real_escape_string(trim($_POST['password']));
        $location               = $mysqli->real_escape_string(trim($_POST['location']));
        $link_to                = $mysqli->real_escape_string(trim($_POST['link_to']));
        $maint_date             = $mysqli->real_escape_string(trim(date('Y-m-d', strtotime($_POST['maint_date']))));
        // perintah query untuk mengubah data pada tabel Asset
        $update = $mysqli->query("UPDATE tbl_asset SET tanggal_pemeriksaan  = '$tanggal_pemeriksaan',
                                                        no_asset            = '$no_asset',
                                                        kategori            = '$kategori',
                                                        nama_device         = '$nama_device',
                                                        brand               = '$brand',
                                                        type                = '$type',
                                                        motherboard         = '$motherboard',
                                                        cpu                 = '$cpu',
                                                        ram                 = '$ram',
                                                        gpu                 = '$gpu',
                                                        storage             = '$storage',
                                                        optical_drive       = '$optical_drive',
                                                        psu                 = '$psu',
                                                        display_unit        = '$display_unit',
                                                        operating_system    = '$operating_system',
                                                        komputer_type       = '$komputer_type',
                                                        ip_address          = '$ip_address',
                                                        mac_address         = '$mac_address',
                                                        connectivity        = '$connectivity',
                                                        internet            = '$internet',
                                                        user                = '$user',
                                                        password            = '$password',
                                                        location            = '$location',
                                                        link_to             = '$link_to',
                                                        maint_date          = '$maint_date',
                                                        maint_next_date     = '$maint_date' + INTERVAL 125 DAY
                                                WHERE   id_asset            = '$id_asset'")
        or die('Ada kesalahan pada query update : '.$mysqli->error);
        // cek query
        if ($update) {
            // jika berhasil tampilkan pesan berhasil ubah data
            echo "sukses";
        } else {
            // jika gagal tampilkan pesan gagal ubah data
            echo "gagal";
        }
    }
    // tutup koneksi
    $mysqli->close();   
} else {
    echo '<script>window.location="index.php"</script>';
}
?>