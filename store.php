<?php

$db =require_once 'start.php';

$title = $_POST['title'];


$db->store_place($title);