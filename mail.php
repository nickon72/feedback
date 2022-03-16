<?php

$db =require_once 'start.php';

//пишем файл заявки на диск и получаем имя этого файла для записи в таблицу заказов
$request_name = $db->save_zayavka();
//получаем email из таблицы (из формы выбираем на какой отдел шлем заявку)

$email = $db->find('departmens',$_POST['departmen_id']);



//если нет вложенного файла заявки пишем пустую строку в базу с именем файла заявки
if(strlen($request_name) < 11) $request_name = '';
$db->store_orders($_POST['place_id'],$_POST['name'],$_POST['phone'],$_POST['message'],$request_name);

//отправляем почту
$db->send_mail($email['email']);

header("Location: /");


