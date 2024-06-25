<?php require_once VIEWS . '/incs/header.tpl.php'; ?>

    <div class="container">
        <div class="col-md-5 mx-auto">
            <form method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="login" id="login">
                    <label for="email">Логин</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="pass" id="pass">
                    <label for="pass">Пароль</label>
                </div>
                <button type="submit" class="btn btn-primary">Авторизоваться</button>
            </form>
        </div>
    </div>


<?php require_once VIEWS . '/incs/footer.tpl.php'; ?>