<?php

$data = file_get_contents('coba.json');
// true merubah menjadi array, jika tidak maka object
// $mahasiswa = json_decode($data); 
$mahasiswa = json_decode($data, true);


var_dump($mahasiswa);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"];