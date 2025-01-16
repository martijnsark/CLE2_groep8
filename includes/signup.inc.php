<?php



//check if user actually filled form through the submit button
if (isset($_POST["submit"])) {

    //assign variables to posted data from users table
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //include connection and functions user later
    require_once 'connection.php';
    require_once 'functions.inc.php';

    //execute error functions from functions.inc.php and send user to the correct page with the error in the URL
    //(error message in url is used for the error message on signup.php)

    //checck for empty input
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    //check for wrong syntax in username
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    //check for wrong email syntax
    if (invalidemail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    //check if the password doesen't match the second copy
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    //check if either email or usename already exists in the data table Users
    if (uidExists($db, $username, $email) !== false) {
        header("location: ../signup.php?error=useralreadyexists");
        exit();
    }

    //execute code to create user with the given details from the user
    createUser($db, $name, $email, $username, $pwd);

//something unexpected happend return to signup.php
} else {
    header("location: ../signup.php");
    exit();
}
