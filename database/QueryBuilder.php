<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {

        // выбираем данные
        $statement = $this->pdo->query("select * from $table");

        //вывести в асоциативном массиве.
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function find($table,$id)
    {

        // выбираем данные
        $statement = $this->pdo->prepare("select * from $table WHERE id=:id");

        //присваиваем параметры
        $statement->bindParam("id", $id);

        //выполняем запрос
        $statement->execute();

        //вывести в асоциативном массиве.
        $results = $statement->fetch(PDO::FETCH_ASSOC);

        return $results;
    }

    public function store_place($title)
    {

        $statement = $this->pdo->prepare("INSERT INTO place (address) VALUES (:title)");

        $statement->bindParam("title", $title);

        $statement->execute();


    }

    public function store_orders($id_place,$name,$phone,$message,$request_name)
    {

        $statement = $this->pdo->prepare("INSERT INTO orders (id_place,name,phone,message,request_name)
                                                      VALUES (:id_place,:name,:phone,:message,:request_name)");

        $statement->bindParam("id_place", $id_place);
        $statement->bindParam("name", $name);
        $statement->bindParam("phone", $phone);
        $statement->bindParam("message", $message);
        $statement->bindParam("request_name", $request_name);

        $statement->execute();


    }

    public function update_place($id, $title)
    {

        $statement = $this->pdo->prepare("UPDATE place SET address=:title WHERE id=:id");

        $statement->bindParam("title", $title);
        $statement->bindParam("id", $id);

        $statement->execute();


    }

    public function update_email($id, $email)
    {

        $statement = $this->pdo->prepare("UPDATE departmens SET email=:email WHERE id=:id");

        $statement->bindParam("email", $email);
        $statement->bindParam("id", $id);

        $statement->execute();

    }

    public function delete($table,$id)
    {

        $statement = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
        $statement->bindParam("id", $id);

        $statement->execute();


    }

   public function save_zayavka()
   {
       $rand = mt_rand();

       $uploaddir = './uploads/';
       $uploadfile = $uploaddir.$rand.basename($_FILES['zayavka']['name']);
       $request_name = $rand.basename($_FILES['zayavka']['name']);

// Копируем файл из каталога для временного хранения файлов:
       if(isset($_FILES['zayavka']['name']))
       { move_uploaded_file($_FILES['zayavka']['tmp_name'], $uploadfile);
         $rezult = "<h3>Файл успешно загружен на сервер</h3>";
       }
       else { $rezult = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

      return $request_name;
   }

    public function send_mail($email)
    {
        $to = $email;
        $tema = "Форма обратной связи"; // тема полученного емайла
        $message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
        $message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
        $message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
        $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
       mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
    }
}