<?php

require_once __DIR__ . '/lib/mysqli.php';
require_once __DIR__ . '/class/Users.php';

$link = dbConnect();
$userNames = [];
$user = new Users();
$userNames = $user->displayUserName($link);
$title = '社員登録';
$content = __DIR__ . '/view/new.php';
include __DIR__ . '/lib/layout.php';
