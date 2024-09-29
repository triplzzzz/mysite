<?php
$servername = "localhost";
$username = "root"; 
$password = "megabase123"; 
$dbname = "denis_base";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];
$fam = $_POST['fam'];
$pass = $_POST['pas'];
$number = $_POST['num'];
$mail = $_POST['mail'];
$card = $_POST['card'];


$sql = "INSERT INTO user (name, fam, pass, number, mail, card) VALUES ('$name', '$fam', '$pass', '$number', '$mail', '$card')";

if ($conn->query($sql) === TRUE) {
    echo "success"; 
} else {
    die ("error"); 
}


$conn->close();
?>
