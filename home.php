<?php

$db =require_once 'start.php';


$places = $db->selectAll("place");


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>тест</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>


<main role="main" class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>места хранения заявок</h1>
            <div><a href="/">На главную</a></div><br>
            <a href=/create.php class="btn btn-success">Добавить</a>

            <table class="table">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Название</td>
                    <td>Действия</td>
                </tr>
                </thead>

                <tbody>
                <?php foreach($places as $place): ?>
                    <tr>
                        <td><?=$place['id']?></td>
                        <td><?=$place['address']?></td>
                        <td>
                            <a href="show.php?id=<?=$place['id']?>" class="btn btn-info">Просмотреть</a>
                            <a href="edit.php?id=<?=$place['id']?>" " class="btn btn-warning">Изменить</a>
                            <a onclick=" return confirm('Вы уверены?')" href="delete.php?id=<?=$place['id']?>" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</main><!-- /.container -->


</body>
</html>