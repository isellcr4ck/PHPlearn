<?php

function dump(array $array) {
 echo '<pre>' . print_r($array, true) . '</pre>';
}

function validation()
{
    $data = [
        "email" => $_POST['email'],
        "name" => $_POST['name'],
        "surname" => $_POST['surname'],
        "pass" => $_POST['pass']
    ];

    global $db;
    $stmt = $db->prepare('SELECT COUNT(*) FROM `users` WHERE email = ?');
    $stmt->execute([$data['email']]);
    if ($stmt->fetchColumn()) {
        echo 'Данный email уже зарегистрирован' . PHP_EOL;
        return false;
    }
    if (empty($data['name'])) {
        echo 'Заполните поле: Имя' . PHP_EOL;
        return false;
    }
    if (empty($data['surname'])) {
        echo 'Заполните поле: Фамилия' . PHP_EOL;
        return false;
    }
    if (empty($data['pass']) || empty($_POST["repeatpass"])) {
        echo 'Заполните поля паролей' . PHP_EOL;
        return false;
    }
    if ($data['pass'] !== $_POST["repeatpass"]) {
        echo 'Пароли не совпадают' . PHP_EOL;
        return false;
    }

    $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);

    return $data;
}

function registration(array $data) :void
{
    try {
        global $db;
        $sth = $db->prepare("INSERT INTO `users` (email,name,surname,password) VALUES (:email,:name,:surname,:pass)");
        $sth->execute($data);
        header('Location: ./index.php');
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}

function login() :void
{
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    global $db;
    // Поиск пользователя в БД
    $stmt = $db->prepare("SELECT * FROM `users` WHERE email = ?");
    $stmt->execute([$login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pass, $user['password'])) {
      // Аутентификация успешна
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        header('Location: ./index.php');
        exit();
    } else {
        echo 'Неправильный логин или пароль' . PHP_EOL;
    }

}