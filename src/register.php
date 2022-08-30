<?php

require_once __DIR__ . '/lib/mysqli.php';
require_once __DIR__ . '/class/Users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $user = new Users();
    $link = dbConnect();
    $user->registerUserName($link, $name);
    header("Location: new.php");
}
