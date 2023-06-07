<?php

require_once("./inc/Page.class.php");
require_once("./inc/Order.class.php");

echo Page::htmlStart();
echo Order::orderBody();
echo Page::htmlEnd();