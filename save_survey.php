<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $network = $_POST["network"];
    $time = $_POST["time"];
    $activity = $_POST["activity"];

    date_default_timezone_set("Europe/Kyiv");
    $datetime = date("Y-m-d_H-i-s");

    if (!file_exists("survey")) {
        mkdir("survey");
    }

    $data = [
        "Ім'я" => $name,
        "Email" => $email,
        "Соцмережа" => $network,
        "Час у мережах" => $time,
        "Активність" => $activity,
        "Дата" => date("Y-m-d H:i:s")
    ];

    $filename = "survey/response_$datetime.json";
    file_put_contents($filename, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    echo "<h2>Дякуємо за відповідь, $name!</h2>";
    echo "<p>Форма надіслана: " . date('Y-m-d H:i:s') . "</p>";
}
?>
