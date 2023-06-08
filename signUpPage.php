<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Utilities/PDOAgent.class.php");
require_once("inc/Utilities/DAO/UserDAO.class.php");
require_once("inc/Page.class.php");
require_once("inc/SignUpPage.class.php");

session_start();
UserDAO::init();
echo Page::htmlStart();

if (!empty($_POST)){
    $newUser = new User();
    $newUser->setUsername($_POST['username']); // in our form
    $newUser->setPassword($_POST['password']); 
    $newUser->setEmail($_POST['email']);
    // $newUser->setPicture($_POST['picture']);

    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $newUser->setPassword($newPassword);
    $userExist = UserDAO::getUserByEmail($_POST['email']);
    if(!$userExist){
        UserDAO::insertNewUser($newUser);
        // var_dump('success');
        header("Location: index.php");
        unset($_POST);
    } else {
        // var_dump('already exist');
        header("Location: signUpDup.php");
    }    
}
echo SignUpPage::signUp();
echo Page::htmlEnd();