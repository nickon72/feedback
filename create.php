<?php
    
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
          <h1>Добавление места хранения</h1>
          <form action="/store.php" method="post">
            <div>
              <input type="text" name="title" class="form-control" placeholder="введите название">
              <br>
              <button type="submit" class="btn btn-success">Добавить</button>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /.container -->

  </body>
</html>
