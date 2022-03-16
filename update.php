<?php
$db =require_once 'start.php';

$title = $_POST['title'];
$id = $_GET['id'];



$db->update_place($id, $title);
header("Location: /home.php");
