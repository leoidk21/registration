<?php 

require 'vendor/autoload.php';// copy mo lang to

$client = new MongoDB\Client; // connection sa database
$collection = $client->students->info;// connection ulit sa database pero yung BSIT_3B(yung DATABASE NATIN), students (COLLECTION)

?>