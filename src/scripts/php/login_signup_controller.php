<?php
require 'config_data_base.php';

class ConnectSQL {
    protected $servername, $user, $database_name;
    protected $password, $connect;

    public function connect($servername, $user, $password, $database_name) {
        $this->connect = mysqli_connect($servername, $user, $password, $database_name);
        if (!$this->connect) {
            die("Ошибка подключения: " . mysqli_connect_error());
        } else {
            echo "Успешное подключение";
            return $this->connect;
        }
    }

    public function getConnection() {
        return $this->connect;
    }
}

class SignUpController {
    protected $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    public function registration($full_name, $mail, $password, $phone, $type_user, $adress) {
        $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
        $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
        $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $type_user = isset($_POST['type_user']) ? $_POST['type_user'] : '';
        $adress = isset($_POST['adress']) ? $_POST['adress'] : '';

        if ($this->connect) {
            
            $sql_request = "INSERT INTO USERS (full_name, mail, password, phone, type_user, adress) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($this->connect->getConnection(), $sql_request);
            mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $mail, $password, $phone, $type_user, $adress);
            mysqli_stmt_execute($stmt);

            echo "Пользователь добавлен";
        } else {
            die("Ошибка подключения к базе данных.");
        }
    }
}

class LogIn {

    protected $connect;
    
    public function __construct($connect) {
        $this->connect=$connect;
    }
   

}

$connect = new ConnectSQL();
$connection = $connect->connect($config['servername'], $config['user'], $config['password'], $config['database_name']);
$signUpController = new SignUpController($connect); // передаем объект ConnectSQL
$signUpController->registration('Ярослав Еланский', 'qwer@mail.ru', '11111', '12223', 'human', 'Tomsk');
?>