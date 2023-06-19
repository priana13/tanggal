<?php 
namespace Tanggal;

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

      /**
       * Bulan awal tanggal 1
       */

      public static function awal_bulan_lalu(){

        $tanggal = date('Y-m-01', strtotime(date('Y-m-d') . ' -1 month'));

        return $tanggal;

      }

      /**
       * Bulan lalu tanggal yang sama dengan hari ini
       */
      public static function bulan_lalu(){

        $tanggal = date('Y-m-d', strtotime(date('Y-m-d') . ' -1 month'));

        return $tanggal;
        
      }


}