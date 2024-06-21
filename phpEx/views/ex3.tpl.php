<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container">
<pre>
                    Задание №3
Дана строка. Выведите в консоль последний символ строки.
</pre>
    </div>

    <form method="get" action="">
        <div class="form-floating mb-3">
            <input type="text" name="str" placeholder="Введите строку" class="form-control">
            <label for="str">Строка:</label>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Показать символ</button>
    </form>

<?php
if (isset($_GET["str"])) {
    $lustSymbol = $_GET["str"];
    if (mb_strlen($lustSymbol, 'UTF-8') <= 0) {
        echo 'Введите строку, длинной от 1 символа';
    } else {
        echo 'Последний символ: ' . htmlspecialchars(mb_substr($lustSymbol, mb_strlen($lustSymbol, 'UTF-8') - 1, 1, 'UTF-8'), ENT_QUOTES, 'UTF-8');
    }
}
?>
    <button class="btn btn-submit mt-5"><a href="../index.php">Назад</a></button>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>