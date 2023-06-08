<?php
require_once("./inc/Page.class.php");
require_once("./inc/LoginManager.class.php");

require_once("./inc/Entities/User.class.php");

require_once("./inc/Userpage.class.php");

session_start();

echo Page::htmlStart();

if(LoginManager::verifyLogin()){
    $user = $_SESSION["email"];
    echo Userpage::Userpage($user);
 }

 echo Page::htmlEnd();
