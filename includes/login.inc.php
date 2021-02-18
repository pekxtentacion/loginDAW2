<?php

if(isset($_POST["submit"])){
    $uid = $_POST["name"];
    $pass = $_POST["pass"];

    require_once "db.inc.php";
    require_once "functions.inc.php";

    if(emptyInputsLogin($uid, $pass)){
        header("location: ../login.php?error=empty");
        exit();    
    }

    loginUser($conn, $uid, $pass);

}else{
    header("location: ../login.php");
    exit();
}