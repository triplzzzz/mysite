<?php
$servername = "localhost";
$username = "root";
$password = "megabase123";
$dbname = "denis_base";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$query = "SELECT id_arenda, name_sam, number_gai, price, state FROM arenda";
$result = $conn->query($query);


$data = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $row['state'] = ($row['state'] == 1) ? 'Занят' : 'Свободен';

        $id_arenda = $row['id_arenda'];

        $data[] = $row;
    }
} else {
    echo "0 результатов";
}


$conn->close();

echo json_encode($data);
?>
