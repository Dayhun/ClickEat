<?php
require_once("./inc/Page.class.php");
require_once("./inc/SignUp.page.php");
require_once("./inc/Userpage.class.php");

echo Page::htmlStart();
echo SingUpPage::signUp();
echo Page::htmlEnd();

