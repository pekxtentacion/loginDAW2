<?php

function emptyInputsSignUp($name, $email, $uid, $pass, $passRepeat){
    if(empty($name) || empty($email) || empty($uid) || empty($pass) || empty($passRepeat)){
        return true;
    }
    return false;
}

function invalidUid($uid){
    if(preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        return false;
    }
    return true;
}

function invalidEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function pwdEquals($pass, $passRepeat){
    if($pass === $passRepeat){
        return true;
    }
    return false;
}

function uidExists($conn, $uid, $email){
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $uid, $pass){
    $sql = "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();    

}