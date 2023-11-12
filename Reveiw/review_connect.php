<?php
    // 데이터베이스 연결 및 데이터 가져오기
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant_data";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Store_id, value FROM List";
    $result = $conn->query($sql);
?>
