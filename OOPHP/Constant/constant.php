<?php

// define('NAMA', 'Satria Bagus');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

class Coba {
    const NAMA = 'Satria Bagus';
}

echo Coba::NAMA;
echo "<br>";

// Magic Constant

echo __LINE__;
echo "<br>";
echo __FILE__;

echo "<br>";

class coba() {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo coba();

?>