<?php
$id = $_GET['id'];
$db =require_once 'start.php';

$departmens = $db->find('departmens',$id);
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
            <h1>Изменение задачи</h1>
            <form action="update_email.php?id=<?=$departmens['id']?>" method="post">
                <div>
                    <input type="text" name="email" class="form-control" placeholder="введите название" value="<?=$departmens['email']?>">
                    <br>
                    <button type="submit" class="btn btn-warning">Изменить</button>
                </div>
            </form>
        </div>
    </div>

</div><!-- /.container -->

</body>
</html>
