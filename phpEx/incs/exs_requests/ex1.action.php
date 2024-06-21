<?php
if (isset($_GET["number"])) {
    $number = (int) $_GET["number"];;
    if ($number >= 0) { ?>
        <p style="color: lawngreen;">Число является положительным</p>
    <?php } else { ?>
        <p style="color: red">Число является отрицательным</p>
    <?php } ?>
<?php } ?>