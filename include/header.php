<?php
require_once "config/config.php";

// Function to get the client IP address
// function get_client_ip() {
//    $ipaddress = '';
//    if (getenv('HTTP_CLIENT_IP'))
//        $ipaddress = getenv('HTTP_CLIENT_IP');
//    else if(getenv('HTTP_X_FORWARDED_FOR'))
//        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
//    else if(getenv('HTTP_X_FORWARDED'))
//        $ipaddress = getenv('HTTP_X_FORWARDED');
//    else if(getenv('HTTP_FORWARDED_FOR'))
//        $ipaddress = getenv('HTTP_FORWARDED_FOR');
//    else if(getenv('HTTP_FORWARDED'))
//        $ipaddress = getenv('HTTP_FORWARDED');
//    else if(getenv('REMOTE_ADDR'))
//        $ipaddress = getenv('REMOTE_ADDR');
//    else
//        $ipaddress = 'UNKNOWN';
//    return $ipaddress;
//}

// Function to get Operating System
// $user_agent = $_SERVER["HTTP_USER_AGENT"];
// function getOS() { 
//     global $user_agent;
//     $os_platform    =   "Unknown OS Platform";
//     $os_array       =   array(
//         '/windows nt 10/i'     =>  'Windows 10',
//         '/windows nt 6.3/i'     =>  'Windows 8.1',
//         '/windows nt 6.2/i'     =>  'Windows 8',
//         '/windows nt 6.1/i'     =>  'Windows 7',
//         '/windows nt 6.0/i'     =>  'Windows Vista',
//         '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
//         '/windows nt 5.1/i'     =>  'Windows XP',
//         '/windows xp/i'         =>  'Windows XP',
//         '/windows nt 5.0/i'     =>  'Windows 2000',
//         '/windows me/i'         =>  'Windows ME',
//         '/win98/i'              =>  'Windows 98',
//         '/win95/i'              =>  'Windows 95',
//         '/win16/i'              =>  'Windows 3.11',
//         '/macintosh|mac os x/i' =>  'Mac OS X',
//         '/mac_powerpc/i'        =>  'Mac OS 9',
//         '/linux/i'              =>  'Linux',
//         '/ubuntu/i'             =>  'Ubuntu',
//         '/iphone/i'             =>  'iPhone',
//         '/ipod/i'               =>  'iPod',
//         '/ipad/i'               =>  'iPad',
//         '/android/i'            =>  'Android',
//         '/blackberry/i'         =>  'BlackBerry',
//         '/webos/i'              =>  'Mobile'
//     );
//     foreach ($os_array as $regex => $value) { 
//         if (preg_match($regex, $user_agent)) {
//             $os_platform    =   $value;
//         }
//     }   
//     return $os_platform;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Computer Network Specialist">
  <meta name="keywords" content="Computer Network Specialist">
  <meta name="author" content="Encep Suryana">

  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/select.bootstrap4.min.css">
  <!-- Multiple Select -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/multiple-select/css/multiple-select.scss">
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables/css/fixedColumns.dataTables.min.css">
  <!-- datepicker CSS -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.1-web/css/all.min.css">
  <!-- Sweetalert CSS -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert/css/sweetalert.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- Fungsi untuk membatasi karakter yang diinputkan -->
  <script type="text/javascript" src="assets/js/fungsi_validasi_karakter.js"></script>

  <title>IT - NETWORK</title>
</head>