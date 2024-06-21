<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container">
<pre>
                Задание №4
Дано число. Проверьте, четное оно или нет.
</pre>
    </div>

    <form method="get" action="">
        <div class="form-floating mb-3">
            <input type="text" name="number" placeholder="Введите число" class="form-control">
            <label for="number">Число:</label>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Проверка числа</button>
    </form>

<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if ( (float) $number % 2 == 0) { ?>
        <p style="color: lawngreen;">Число является чётным</p>
    <?php } else { ?>
        <p style="color: red">Число является нечёнтным</p>
    <?php }
}
?>


    <button class="btn btn-submit mt-5"><a href="../index.php">Назад</a></button>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>