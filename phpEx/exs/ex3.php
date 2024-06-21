<?php

session_start();
require_once '../incs/config.php';
require_once ROOT . '/incs/functions.php';
require_once ROOT . '/incs/db.php';

$title = 'Решение задачи №3';

require_once VIEWS . '/ex3.tpl.php';
