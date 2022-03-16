<?php

$db =require_once 'start.php';


$departmens = $db->selectAll("departmens");


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
            <h1>адреса доставки заявок</h1>
            <div><a href="/">На главную</a></div><br>

            <table class="table">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Название</td>
                    <td>Действия</td>
                </tr>
                </thead>

                <tbody>
                <?php foreach($departmens as $departmen): ?>
                    <tr>
                        <td><?=$departmen['title']?></td>
                        <td><?=$departmen['email']?></td>
                        <td>
                            <a href="edit_email.php?id=<?=$departmen['id']?>" " class="btn btn-warning">Изменить</a>
                            <a onclick=" return confirm('Вы уверены?')" href="delete_email.php?id=<?=$departmen['id']?>" class="btn btn-danger">Удалить</a>
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