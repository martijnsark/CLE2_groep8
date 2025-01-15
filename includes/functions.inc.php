<?php

//check if any part of the form is empty and apply correct true or false status
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//only allow valid usernames so alphabetical lowercase and uppercase and numbers and apply correct true or false status
function invalidUid($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//only allow correct email structure and apply correct true or false status
function invalidemail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//see if passwords match and apply correct true or false status
function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//safely see if user already exist by email or userUid(username)
function uidExists($db, $username, $email) {

    //prepare querry to get all Users details where username or email matches input
    $sql = "SELECT * FROM USERS WHERE usersUid = ? OR usersEmail = ?;";
    //start prepared statment
    $stmt = mysqli_stmt_init($db);

    //handle errors during preparing a statement
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    //connect the user input to the placeholders and execute the prepared statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    //grab the result
    $resultData = mysqli_stmt_get_result($stmt);

    //handle what to do based on result from the query
    if ($row = mysqli_fetch_assoc($resultData)) {
        //if match found return user data
        return $row;
    } else {
        //if no match found return false result
        $result = false;
        return $result;
    }

    //close statment
    mysqli_stmt_close($stmt);
}

//creates user in database
function createUser($db, $name, $email, $username, $pwd) {

    //prepare querry to insert all user input into users table
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    //start prepared statment
    $stmt = mysqli_stmt_init($db);

    //handle errors during preparing a statement
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    //hash password to current standard
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //connect the user input to the placeholders and execute the prepared statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    //close statment
    mysqli_stmt_close($stmt);
    //return to signup with error = none
    header("location: ../signup.php?error=none");
    exit();
}

//check if user filled all login fields
function emptyInputLogin($username, $pwd) {
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//check if user correctly logged in
function loginUser($db, $username, $pwd) {

    //see if user actually exist through uidExist function from earlier
    //username is mentiond twice because one is for the email and the other is for the username
    $uidExists = uidExists($db, $username, $username);

    //check if the usename and the email exist
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    //get the password from the uidExists function
    $pwdHashed = $uidExists["usersPwd"];
    //compare the given password to the hashed database password
    $checkPwd = password_verify($pwd, $pwdHashed);

    //sent user back to login if user details are wrong with error in URL
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    //if passwords match start session 
    else if ($checkPwd === true) { 
        session_start();
        //assign userid and username + email to session details
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        //retrun user to home page with loggedin error status
        header("location: ../index.php?error=loggedin");
        exit();
    }
}