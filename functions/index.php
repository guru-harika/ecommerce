<?php
require 'vendor/autoload.php';
use Firebase\Firebase;

$firebase = new Firebase('https://ecommerce-f25e7.firebaseio.com/');

$data = $firebase->get('data');
echo $data;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = $_POST['data'];
  $firebase->set('data', $data);
}
?>
