<?php 

class Tanggal {

    /**
     * Hari ini
     */
    public static function hari_ini():string
    {

        $date = date('Y-m-d');

        return $date;
    }

    /**
     * tanggal 1 bulan ini
     */

     public static function awal_bulan(){

       $tanggal = date('Y-m-1');

       return $tanggal;
        
     }

     /**
     * akhir bulan ini
     */

     public static function akhir_bulan(){

        $tanggal = date('Y-m-t');
 
        return $tanggal;
         
      }



}