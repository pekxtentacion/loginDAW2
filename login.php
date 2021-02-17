<?php
    include_once "header.php";
?>
    <div class="wrapper">
        <section>
            <h1>Login</h1>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Nombre de usuario o email...">
                <input type="password" name="pass" placeholder="Contraseña...">
                <button type="submit" name="submit">Login</button>
            </form>
        </section>
    </div>
<?php
    include_once "footer.php";