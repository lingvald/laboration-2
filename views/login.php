<?php include '../layouts/header.php' ?>

<a class="home" href="index.php"><i class="fa fa-arrow-left"></i></a>

<div class="login-page">
    <div class="page-container login-box">
        <h2 class="small-title">Logga in</h2>
        <div class="container">
            <form autocomplete="off" method="post">
                <div class="field">
                    <input required autofocus type="text" id="login_username" name="username">
                    <label for="login_username">Användarnamn</label>
                </div>
                <div class="field">
                    <input required type="password" id="login_password" name="password">
                    <label for="login_password">Lösenord</label>
                </div>
                <button type="submit" name="login">Logga in</button>
            </form>
        </div>
    </div>

    <div class="page-container register-box">
        <h2 class="small-title">Registrera dig</h2>
        <div class="container">
            <form autocomplete="off" method="post">
                <div class="field">
                    <input required autofocus type="text" id="reg_username" name="username">
                    <label for="reg_username">Användarnamn</label>
                </div>
                <div class="field">
                    <input required type="email" id="reg_email" name="email">
                    <label for="reg_email">E-mailadress</label>
                </div>
                <div class="field">
                    <input required type="text" id="reg_image" name="image">
                    <label for="reg_image">Profilbild</label>
                </div>
                <div class="field">
                    <input required type="password" id="reg_password" name="password">
                    <label for="reg_password">Lösenord</label>
                </div>
                <div class="field">
                    <input required type="password" id="reg_conf_password" name="conf_password">
                    <label for="reg_conf_password">Bekräfta lösenord</label>
                </div>
                <button type="submit" name="register">Registrera dig</button>
            </form>
        </div>
    </div>
</div>
<?php include '../layouts/footer.php' ?>