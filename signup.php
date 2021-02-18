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
            <?php
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                    if($error === "none"){
                        echo "<p>Usuario creado correctamente.</p>";
                    }
                    if($error === "empty"){
                        echo "<p>Completa todos los campos.</p>";
                    }
                    if($error === "invalidUid"){
                        echo "<p>Introduce un nombre de usuario válido.</p>";
                    }
                    if($error === "invalidEmail"){
                        echo "<p>Introduce un email válido.</p>";
                    }
                    if($error === "passnotequal"){
                        echo "<p>Las contraseñas no coinciden.</p>";
                    }
                    if($error === "uidExists"){
                        echo "<p>Ya existe un usuario con ese nombre de usuario o email.</p>";
                    }
                    if($error === "stmtFailed"){
                        echo "<p>Hubo un error con la base de datos.</p>";
                    }
                }
            ?>
        </section>
    </div>
<?php
    include_once "footer.php";