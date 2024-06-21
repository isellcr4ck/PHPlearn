<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

<div class="container">
<pre>
                                    Задание №1
Дано число. Проверьте, отрицательное оно или нет. Выведите об этом информацию в консоль.
</pre>
</div>

    <form method="get" action="">
        <div class="form-floating mb-3">
            <input type="text" name="number" placeholder="Введите число" class="form-control">
            <label for="number">Число:</label>
        </div>
        <button type="submit" class="btn btn-primary mt-1">Проверить</button>
    </form>

<?php
if (isset($_GET["number"])) {
    $number = $_GET["number"];;
    if ((float) $number >= 0) { ?>
        <p style="color: lawngreen;">Число является положительным</p>
    <?php } else { ?>
        <p style="color: red">Число является отрицательным</p>
    <?php } ?>
<?php } ?>

<button class="btn btn-submit mt-5"><a href="../index.php">Назад</a></button>

<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>