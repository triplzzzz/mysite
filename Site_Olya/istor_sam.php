<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "megabase123";
$dbname = "denis_base";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$id_user = $_SESSION['id_user'];


$query = "SELECT name, number_gai, price, date FROM zakaz WHERE id_user_zk = $id_user";
$result = $conn->query($query);


$data = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 результатов";
}


$conn->close();


echo json_encode($data);
?>
