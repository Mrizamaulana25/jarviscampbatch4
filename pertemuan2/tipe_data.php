<?php
// tipe data integer
$umur = 20;

var_dump($umur);

// float
$phi = 3.14;

var_dump($phi);

// string
$nama = 'aldi';

var_dump($nama);

echo "Hello $nama umur saya $umur nilai 'phi' adalah $phi";

// boolean
$isStudent = true;

echo "<br>";

var_dump($isStudent);

echo "<br>";

// array
$siswa = ["aldi", 17, true];

echo "Hallo nama saya $siswa[0], umur saya adalah $siswa[1] tahun.";
echo "<br>";

// array: asosiatif
$mahasiswa = ["nama" => "aldi mahardiansyah", "umur" => 17, "ipk" => 4.0];

echo "hai saya $mahasiswa[nama], saya seorang mahasiswa dengan ipk $mahasiswa[ipk]";
