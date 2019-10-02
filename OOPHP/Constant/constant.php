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

function coba() {
    return __FUNCTION__;
}
echo "<br>";
echo coba();


?>