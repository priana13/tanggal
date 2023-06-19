<?php 

namespace Tanggal;

require '../src/Tanggal.php';
require '../src/Bulan.php';


$tanggal = new \Tanggal\Tanggal();

$bulan = new Bulan();


// echo $tanggal->bulan_lalu();

var_dump($bulan->list_bulan()) ;
