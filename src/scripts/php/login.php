<?php

require_once('version2.php');

echo'<pre>';
var_dump($_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Diplom";

// Создаем подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
if ($_SERVER["REQUEST_METHOD"] && $_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $mail = mysqli_real_escape_string($conn, $mail);
    $password = mysqli_real_escape_string($conn, $password);

    //  проверка наличия пользователя по почте и паролю
    $sql = "SELECT * FROM USERS WHERE mail = '$mail' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Пользователь найден
      $row = mysqli_fetch_assoc($result);
      $mail = $row['mail'];
      ?>
      <script>
        alert('Успешный вход в систему');
        window.location.href = 'tree.html'; // Перенаправление на страницу входа
        document.querySelector('#user-info').style.display = 'block';
        document.querySelector('#welcome-message').innerText = '<?php echo $mail; ?>';
      </script>
      <?php
      exit();
    } else {
      // Пользователь не найден
      ?>
      <script>
        alert('Неправильная почта или пароль');
        window.location.href = 'gsd.html'; // Перенаправление на страницу входа
      </script>
      <?php
      exit();
    }
    
}

$conn->close();
?>
