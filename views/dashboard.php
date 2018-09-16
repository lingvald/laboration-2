<?php include '../layouts/header.php' ?>

<div class="page-container">
        <h1 class="main-title">Välkommen</h1>
        <div class="user-profile">
                <p><?= $_SESSION['username'] ?></p>
                <div class="pimage" style="background-image: url(<?= $_SESSION['image']; ?>)"></div>
        </div>
        <form method="post">
                <button type="submit" name="logout">Logga ut</button>
        </form>
</div>

<?php include '../layouts/footer.php' ?>