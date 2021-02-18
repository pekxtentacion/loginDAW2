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
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
                if($error === "wronglogin"){
                    echo "<p>Usuario o contraseña incorrectos</p>";
                }
                if($error === "empty"){
                    echo "<p>Completa todos los campos.</p>";
                }
            }
        ?>
        </section>
    </div>
<?php
    include_once "footer.php";