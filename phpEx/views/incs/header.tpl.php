<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./incs/css/style.css">
    <title><?=$title ?? 'Заголовок'?></title>
</head>
<body>
    <div class="container mt-3">
    <header>
        <?php if ($_SERVER['REQUEST_URI'] == '/phpEx/' || $_SERVER['REQUEST_URI'] == '/phpEx/index.php'):?>
        <nav>
            <ul>
                <li><a href="registration.php">Регистрация</a></li>
                <li><a href="authorization.php">Авторизация</a></li>
                <li><a href=""></a></li>
            </ul>
        </nav>
        <?php endif; ?>
        <h1><?=$title ?? 'Заголовок'?></h1>
    </header>
    <main>

