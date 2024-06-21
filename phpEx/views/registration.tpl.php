<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container">
        <div class="col-md-5 mx-auto">
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email">
                    <label for="email">Почта</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name">
                    <label for="name">Имя</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="surname" id="surname">
                    <label for="surname">Фамилия</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="pass" id="pass">
                    <label for="pass">Пароль</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="repeatpass" id="repeatpass">
                    <label for="repeatpass">Повторите пароль</label>
                </div>
                <button type="submit" class="btn btn-primary">Создать аккаунт</button>
            </form>
        </div>
    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
$email = $_POST["email"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$pass = $_POST["pass"];

$conn = mysqli_connect('localhost', 'root', 'root', 'register');
$sql = mysqli_query($conn,"INSERT INTO `users` (email, name, surname, pass) VALUES ('$email', '$name', '$surname', '$pass')");

}

?>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>