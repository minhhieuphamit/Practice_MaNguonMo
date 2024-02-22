<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birth_year = $_POST["birth_year"];
    $height = $_POST["height"] / 100;
    $weight = $_POST["weight"];

    $bmi = round($weight / ($height * $height), 2);

    echo "Họ và tên: " . $name . "<br>";
    echo "Năm sinh: " . $birth_year . "<br>";
    echo "Chỉ số BMI: " . $bmi;
}