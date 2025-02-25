#Cara Install

composer require priana13/tanggal

#Cara penggunaan

use Tanggal\Tanggal;


$tanggal = Tanggal:nama_mathod();


#Method yang tersedia:

- hari_ini()
- awal_bulan()
- akhir_bulan()
- awal_bulan_lalu()
awal bulan di bulan lalu
- bulan_lalu() 
tanggal hari ini di kurang 1 bulan

- list_tanggal($n)
List tanggal beberapa hari yang lalu, $n merupakan parameter jumlah hari yang akan diambil

- list_tanggal_spesifik()
  untuk menampilkan list tanggal di bulan tertentu
$list_tanggal = Tanggal::list_tanggal_spesifik($bulan, $tahun);

