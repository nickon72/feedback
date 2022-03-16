<?php

$db = require_once "start.php";
$id = $_GET['id'];


$place = $db->find('place',$id);

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>тест</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  </head>

  <body>

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h3>Просмотр задачи:<?=$id?></h3>
          <h5>
            <?=$place['address']?>
          </h5>
        </div>
      </div>

    </div><!-- /.container -->

  </body>
</html>
