
<?php

$db_host = 'localhost';
$db_name = 'variz';
$db_user = 'root';
$db_pass = '';

// header('Content-Type: application/json');
date_default_timezone_set("Asia/Bangkok");

try {
    $db = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "มีข้อผิดพลาดกับการเชื่อมต่อ: " . $e->getMessage();
}

$result = $db->query("SELECT * FROM `setting`");
