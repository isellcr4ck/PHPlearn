<?php

session_start();

require_once __DIR__ . '/incs/config.php';
require_once ROOT . '/incs/functions.php';
require_once ROOT . '/incs/db.php';

$title = 'Регистрация';

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
 $data = validation();
 if ($data) {
     registration($data);
 }
}

require_once VIEWS . '/registration.tpl.php';