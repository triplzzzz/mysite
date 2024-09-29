<?php
$servername = "localhost";
$username = "root"; 
$password = "megabase123"; 
$dbname = "denis_base";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$scooters = array(
    array("Самокат 1", generateRandomNumber(), 100, true),
    array("Самокат 2", generateRandomNumber(), 120, true),
    array("Самокат 3", generateRandomNumber(), 90, true),
    array("Самокат 4", generateRandomNumber(), 110, false),
    array("Самокат 5", generateRandomNumber(), 80, true),
    array("Самокат 6", generateRandomNumber(), 150, false),
    array("Самокат 7", generateRandomNumber(), 130, true),
    array("Самокат 8", generateRandomNumber(), 95, true),
    array("Самокат 9", generateRandomNumber(), 140, false),
    array("Самокат 10", generateRandomNumber(), 115, true)
);


$stmt = $conn->prepare("INSERT INTO arenda (name_sam, number_gai, price, state) VALUES (?, ?, ?, ?)");


$stmt->bind_param("sisi", $name_sam, $number_gai, $price, $state);


foreach ($scooters as $scooter) {
    $name_sam = $scooter[0];
    $number_gai = $scooter[1];
    $price = $scooter[2];
    $state = $scooter[3];
    $stmt->execute();
}

echo "Данные успешно добавлены в таблицу arenda";


$stmt->close();
$conn->close();


function generateRandomNumber() {
    return str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
}
?>
