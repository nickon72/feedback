<?php

$db = require_once "start.php";

$id = $_GET['id'];

$db->delete('departmens',$id);
header("Location: /home_email.php");