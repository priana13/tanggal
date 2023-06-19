<?php 
namespace Tanggal;


class Bulan {

	public static function bulan_ini(){

		$bulan = date('m');

		return $bulan;
	}

	public static function bulan_lalu(){

        $bulan = date('m', strtotime(date('Y-m-d') . ' -1 month'));

        return $bulan;

    }

    public static function list_bulan():array
    {

    	return [
    		"1" => "Januari",
    		"2" => "Februari",
    		"3" => "Maret",
    		"4" => "April",
    		"5" => "Mei",
    		"6" => "Juni",
    		"7" => "Juli",
    		"8" => "Agustus",
    		"9" => "September",
    		"10" => "Oktober",
    		"11" => "November",
    		"12" => "Desember"

    	];

    }
}