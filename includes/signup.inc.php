<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uid = $_POST["username"];
    $pass = $_POST["pass"];
    $passRepeat = $_POST["passRepeat"];

    require_once "db.inc.php";
    require_once "functions.inc.php";

    if(emptyInputsSignUp($name, $email, $uid, $pass, $passRepeat)){
        header("location: ../signup.php?error=empty");
        exit();    
    }

    if(invalidUid($uid)){
        header("location: ../signup.php?error=invalidUid");
        exit();    
    }

    if(invalidEmail($email)){
        header("location: ../signup.php?error=invalidEmail");
        exit();    
    }

    if(!pwdEquals($pass, $passRepeat)){
        header("location: ../signup.php?error=passnotequal");
        exit();    
    }

    if(uidExists($conn, $uid, $email)){
        header("location: ../signup.php?error=uidExists");
        exit();    
    }

    createUser($conn, $name, $email, $uid, $pass);

}else{
    header("location: ../signup.php");
    exit();
}