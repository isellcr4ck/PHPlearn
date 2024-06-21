<?php

session_start();

require_once __DIR__ . '/incs/config.php';
require_once ROOT . '/incs/functions.php';
require_once ROOT . '/incs/db.php';

$title = 'Авторизация';

require_once VIEWS . '/authorization.tpl.php';