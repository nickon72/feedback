<?php

$db =require_once 'start.php';


$places = $db->selectAll("place");
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


<div class="container">
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-4">
            <h4>Форма обратной связи </h4>
            <form action="mail.php" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="departmens">Выбрать место отправки</label>

                    <select class="form-control" style="width: 100%;" name = "departmen_id">
                        <?php foreach($departmens as $departmen): ?>
                            <option value="<?= $departmen['id'];?>"><?= $departmen['title'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
			<div><a href="home_email.php">изменить email хранения заявки</a></div><br>
                <div class="form-group">
                    <label for="place">место хранения заявки</label>
                    <select class="form-control" name="place_id">
                        <?php foreach($places as $place): ?>
                            <option value="<?= $place['id'];?>"><?= $place['address'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
		  <div><a href="home.php">добавить место хранения заявки</a></div><br>
                <div class="form-group">
                    <label for="phone">Номер телефона:</label>
                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">присоединить заявку</label>
                    <input type=file name=zayavka>
                    <p class="help-block"></p>
                </div><br>
                <button type="submit" class="btn btn-info">Отправить сообщение</button>
            </form>
        </div>
        <div class="col-md-4"> </div> </div>
</div>

</main><!-- /.container -->



</body>
</html>