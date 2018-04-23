<?php
session_start();
unset($_SESSION['access_token']);
unset($_SESSION['openid']);
if(empty($_SESSION['access_token']) && empty($_SESSION['openid']))
echo "ok";
session_destroy();
?>