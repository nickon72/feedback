<?php
$db =require_once 'start.php';

$email = $_POST['email'];
$id = $_GET['id'];



$db->update_email($id, $email);
header("Location: /home_email.php");