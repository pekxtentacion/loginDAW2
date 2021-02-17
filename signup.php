<?php
    include_once "header.php";
?>
    <div class="wrapper">
        <section>
            <h1>Sign up</h1>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Nombre completo...">
                <input type="text" name="email" placeholder="Email...">
                <input type="text" name="username" placeholder="Nombre de usuario...">
                <input type="password" name="pass" placeholder="Contraseña...">
                <input type="password" name="passRepeat" placeholder="Repetir contraseña...">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </section>
    </div>
<?php
    include_once "footer.php";