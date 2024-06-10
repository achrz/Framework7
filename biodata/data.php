<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credential: true");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTION");
header("Access-Control-Max-Age: 86400");
header("Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type");
$biodata = [
    [
        'nama' => 'Santoso',
        'kelamin' => 'Laki - laki',
        'email' => 'santoso@gmail.com',
        'ponsel' => '081234567890'
    ],
    [
        'nama' => 'Putri',
        'kelamin' => 'Perempuan',
        'email' => 'putri@gmail.com',
        'ponsel' => '081234567892'
    ],
    [
        'nama' => 'Surya',
        'kelamin' => 'Laki - laki',
        'email' => 'surya@gmail.com',
        'ponsel' => '081234561212'
    ]
];
echo json_encode($biodata, JSON_PRETTY_PRINT);
