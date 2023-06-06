<?php
require_once("./inc/Page.class.php");
require_once("./inc/signUp.page.php");
echo Page::htmlStart();
echo SignUp::signUp();
echo Page::htmlEnd();
