<?php

session_start();

$_SESSION['user_id'] = 1;

require 'app/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if (!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])) {
    die('Invalid CSRF token');
  }
}

$_SESSION['_token'] = bin2hex(random_bytes(16));//openssl_random_pseudo_bytes for < php 7

// die($_SESSION['_token']);
