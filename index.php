<?php
/*
 * ระบบนี้จัดทำโดย !VARIZ#7721  ห้ามจำหน่ายโดยเด็ดขาด
 * หากแก้ไข ถือว่าเป็นการละเมิดลิขสิทธิ์ซอฟท์แวร์ มีโทษปรับตั้งแต่ 10,000 บาท จนถึง 200,000 บาท จำคุก 3-6 เดือน หรือทั้งจำทั้งปรับ
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
    require_once __DIR__ . "/lib/connect.php";
} else {
    session_start();
    session_destroy();
    echo "<script>alert('เหมือนว่าจะมีข้อผิดพลาด กรุณาติดต่อผู้พัฒนา!')</script>";
    return;
}

use AltoRouter as Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();
$router->map("GET", "/", function () {
    require "view/home.php";
});
$router->map("GET", "/anime", function () {
    require "view/anime.php";
});
$router->map("GET", "/episode", function () {
    require "view/episode.php";
});
$router->map("GET", "/play", function () {
    require "view/play.php";
});
$router->map("GET", "/login", function () {
    require "view/auth/login.php";
});
$router->map("GET", "/register", function () {
    require "view/auth/register.php";
});
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require "view/error.php";
}
