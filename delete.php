<?php

$db = require_once "start.php";

$id = $_GET['id'];

$db->delete('place',$id);
header("Location: /home.php");
