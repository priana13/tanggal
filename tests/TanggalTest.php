<?php 

namespace Tanggal;

require '../src/Tanggal.php';
require '../src/Bulan.php';


$tanggal = new \Tanggal\Tanggal();

$bulan = new Bulan();


// echo $tanggal->bulan_lalu();

var_dump($tanggal->list_tanggal_spesifik(2,2026)) ;
