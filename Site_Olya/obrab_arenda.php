<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "megabase123";
$dbname = "denis_base";


$id_user_zk = $_SESSION['id_user'];


$data = json_decode(file_get_contents('php://input'), true);
$id_arenda = $data['id_arenda'];


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$query_state = "SELECT state FROM arenda WHERE id_arenda = $id_arenda";
$result_state = $conn->query($query_state);
if ($result_state->num_rows > 0) {
    $row_state = $result_state->fetch_assoc();
    $state = $row_state['state'];
    if ($state == 1) {

        $response = array("success" => false, "message" => "Самокат уже арендован!");
        echo json_encode($response);
    } else {

        $query_scooter = "SELECT name_sam, number_gai, price FROM arenda WHERE id_arenda = $id_arenda";
        $result_scooter = $conn->query($query_scooter);
        $row_scooter = $result_scooter->fetch_assoc();
        $name_sam = $row_scooter['name_sam'];
        $number_gai = $row_scooter['number_gai'];
        $price = $row_scooter['price'];


        $date = date('Y-m-d');


        $query_add_order = "INSERT INTO zakaz (id_user_zk, id_arenda, name, number_gai, price, date) VALUES ('$id_user_zk', '$id_arenda', '$name_sam', '$number_gai', '$price', '$date')";
        if ($conn->query($query_add_order) === TRUE) {

            $response = array("success" => true);
            echo json_encode($response);
        } else {

            $response = array("success" => false, "message" => "Ошибка при аренде самоката: " . $conn->error);
            echo json_encode($response);
        }
    }
} else {

    $response = array("success" => false, "message" => "Ошибка при получении информации о самокате.");
    echo json_encode($response);
}


$conn->close();
?>
