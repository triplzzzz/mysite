<?php
$servername = "localhost";
$username = "root"; 
$password = "megabase123"; 
$dbname = "denis_base";


$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
} else {
    echo "Подключение успешно!";
}


$conn->close();
?>
