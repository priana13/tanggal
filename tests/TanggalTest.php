<?php 

use Priana13\Tanggal\Tanggal;
use PHPUnit\Framework\TestCase;

// require '../src/Tanggal.php';

final class TanggalTest extends TestCase
{
    public function testTanggal()
    {   

        $date = Tanggal::hari_ini();

        // $this->assertStatus(200);
        
    }
}
