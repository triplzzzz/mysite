<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question1 = isset($_POST['вопрос1']) ? $_POST['вопрос1'] : 0;
    $question2 = isset($_POST['вопрос2']) ? $_POST['вопрос2'] : 0;
    $question3 = isset($_POST['вопрос3']) ? $_POST['вопрос3'] : 0;
    $sum = $question1 + $question2 + $question3;
    echo $sum;
}
?>
