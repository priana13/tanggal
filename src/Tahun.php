<?php
namespace Tanggal;


class Tahun {

    public static function tahun_ini(){

        return date('Y');
    }


    /**
     * list_tahun sebelumnya sebanyak $jumlah
     *
     * @param  mixed $jumlah
     * @return void
     */
    public static function list_tahun(int $jumlah = 1){

        $tahun_ini = intval(date('Y')) ;

        for ($i=0; $i < $jumlah; $i++) {

            $list_tahun[] = $tahun_ini ;

            $tahun_ini -= 1;

        }

        return $list_tahun;
    }




}
