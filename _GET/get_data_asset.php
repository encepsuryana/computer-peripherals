<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ( $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' )) {

    // nama table
    $table = 'tbl_asset';
    // Table's primary key
    $primaryKey = 'id_asset';

    $columns = array(
        array( 'db' => 'id_asset', 'dt' => 1 ),
        array( 'db' => 'no_asset', 'dt' => 2 ),
        array(
            'db' => 'tanggal_pemeriksaan',
            'dt' => 3,
            'formatter' => function( $d, $row ) {
                return date('d-m-Y', strtotime($d));
            }
        ),
        array( 'db' => 'kategori', 'dt' => 4 ),
        array( 'db' => 'nama_device', 'dt' => 5 ),
        array( 'db' => 'brand', 'dt' => 6 ),
        array( 'db' => 'type', 'dt' => 7 ),
        array( 'db' => 'motherboard', 'dt' => 8 ),
        array( 'db' => 'cpu', 'dt' => 9 ),
        array( 'db' => 'ram', 'dt' => 10 ),
        array( 'db' => 'gpu', 'dt' => 11 ),
        array( 'db' => 'storage', 'dt' => 12 ),
        array( 'db' => 'optical_drive', 'dt' => 13 ),
        array( 'db' => 'psu', 'dt' => 14 ),
        array( 'db' => 'display_unit', 'dt' => 15 ),
        array( 'db' => 'operating_system', 'dt' => 16 ),
        array( 'db' => 'komputer_type', 'dt' => 17 ),
        array( 'db' => 'ip_address', 'dt' => 18 ),
        array( 'db' => 'mac_address', 'dt' => 19 ),
        array( 'db' => 'connectivity', 'dt' => 20 ),
        array( 'db' => 'internet', 'dt' => 21 ),
        array( 'db' => 'user', 'dt' => 22 ),
        array( 'db' => 'password', 'dt' => 23 ),
        array( 'db' => 'location', 'dt' => 24 ),
        array( 'db' => 'link_to', 'dt' => 25 ),
        array(
            'db' => 'maint_date',
            'dt' => 26,
            'formatter' => function( $d, $row ) {
                return date('d-m-Y', strtotime($d));
            }
        ),
        array(
            'db' => 'maint_next_date',
            'dt' => 27,
            'formatter' => function( $d, $row ) {
                return date('d-m-Y', strtotime($d));
            }
        )
    );

    // SQL server connection information
    require_once "../config/database.php";
    // ssp class
    require '../config/ssp.class.php';
    // require 'config/ssp.class.php';

    echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );
} else {
    echo '<script>window.location="index.php"</script>';
}
?>