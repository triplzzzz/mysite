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


$name = $_POST['name'];
$fam = $_POST['fam'];
$email = $_POST['email'];
$num = $_POST['num'];
$otz = $_POST['mes'];


$id_user = $_SESSION['id_user'];


$sql = "INSERT INTO otz (id_user, name, fam, mail, number, otz) VALUES ('$id_user', '$name', '$fam', '$email', '$num', '$otz')";


if ($conn->query($sql) === TRUE) {
    header("Location: Отзывы.php?success=true");
} else {

    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
