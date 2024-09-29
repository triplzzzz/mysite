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

$mail = $_POST["mail"];
$passw = $_POST["pas"]; 


$sql_check_credentials = "SELECT id_user, mail, pass FROM user WHERE mail = '$mail' AND pass = '$passw'"; 
$result_check_credentials = $conn->query($sql_check_credentials);

if (!$result_check_credentials) {
    die("Ошибка выполнения запроса: " . $conn->error);
} else {
    if ($result_check_credentials->num_rows > 0) {
        $row = $result_check_credentials->fetch_assoc();
        $_SESSION['email'] = $mail;
        $_SESSION['id_user'] = $row['id_user']; 
        echo "success";
    } else {
        echo "error";
    }
}


$conn->close();
?>
