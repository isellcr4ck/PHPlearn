<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container">
<pre>
                    Задание №2
Дана строка. Выведите в консоль длину этой строки.
</pre>
    </div>

    <form method="get" action="">
        <div class="form-floating mb-3">
            <input type="text" name="str" placeholder="Введите строку" class="form-control">
            <label for="str">Строка:</label>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Вычислить длину</button>
    </form>

<?php
if (isset($_GET["str"])) {
    $strLen = $_GET["str"];
    echo 'Длина строки ' . "\"$strLen\"" . ', составляет: ' . strlen($strLen) . PHP_EOL;
}
    ?>
    <button class="btn btn-submit mt-5"><a href="../index.php">Назад</a></button>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>