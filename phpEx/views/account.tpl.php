<?php require_once VIEWS . '/incs/header.tpl.php'?>

<?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

<?php if (!empty($_SESSION)) { ?>
<div class="user-block">
    <?php if (isset($_SESSION['PHOTO'])) { ?>
        <img src="user.png" alt="User Avatar">
    <?php } else { ?>
        <img src="../users_images/no_photo.jpeg" alt="avatar" class="User Avatar>
    <?php } ?>
  <h2>
    Имя: <?= $_SESSION['user_name'] . ' ' . $_SESSION['user_surname'];?></h2>
  <p>
    Почта: <?= $_SESSION['user_email'];?>
  </p>
  <button>Выйти</button>
</div>
<?php } ?>



<?php require_once VIEWS . '/incs/footer.tpl.php'?>