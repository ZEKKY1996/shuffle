<?php

require_once __DIR__ . '/lib/mysqli.php';
require_once __DIR__ . '/class/Users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $user = new Users();
    $link = dbConnect();
    $errors = $user->validateUserName($name);
    if (count($errors) == 0) {
        $user->registerUserName($link, $name);
        header("Location: new.php");
    }
    $userNames = [];
    $userNames = $user->displayUserName($link);
    $title = '社員登録';
    $content = __DIR__ . '/view/new.php';
    include __DIR__ . '/lib/layout.php';
}
