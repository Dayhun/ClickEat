<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/UserDAO.class.php");
require_once("inc/Page.class.php");
require_once("inc/SignInPage.class.php");

session_start();
session_destroy();

if(!empty($_POST)){
    UserDAO::init();
    $email = $_POST['email'];
    $userEmail = UserDAO::getUserByEmail($email);
    if( (gettype($userEmail) == "object") && (get_class($userEmail) == "User") ){
        if ($userEmail->passwordValidate($_POST['password']))  {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $userEmail;

            header("Location: mainPageLogged.php");
            exit();
        } else {
            header("Location: signInFailed.php");
        }
    }
}

echo Page::htmlStart();
echo SignInPage::signIn();
echo Page::htmlEnd();