<?php

require_once __DIR__ . '/lib/mysqli.php';
require_once __DIR__ . '/class/Users.php';

$link = dbConnect();
$userNames = [];
$user = new Users();
$userNames = $user->displayUserName($link);
shuffle($userNames);

$title = 'トップページ';
$content = __DIR__ . '/view/index.php';
include __DIR__ . '/lib/layout.php';
