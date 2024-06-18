<?php
function fetchDataFromDatabase($sql_query, $params = []) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Diplomver2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare($sql_query);
        $stmt->execute($params);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conn = null; // Закрытие соединения

        return $data;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
