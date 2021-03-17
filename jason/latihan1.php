<?php
// $mahasiswa = [
//     [
//         "nama" => "Khairul Imam",
//         "nrp" => "08987272388",
//         "email" => "abc@gmail.com"
//     ],
//     [
//         "nama" => "Hendri Saleh",
//         "nrp" => "45665464165",
//         "email" => "def@gmail.com"
//     ],
    
// ];

// var_dump($mahasiswa);

$dbh = new PDO('mysql:host=localhost;dbname=pesan','root','');
$db = $dbh->prepare('SELECT * FROM users');
$db->execute();
$users = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($users);
echo $data;