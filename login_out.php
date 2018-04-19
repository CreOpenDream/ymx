<?php
session_start();
unset($_SESSION['access_token']);
unset($_SESSION['openid']);
unset($_SESSION['UserName']);
if(empty($_SESSION['access_token']) && empty($_SESSION['openid']) && empty($_SESSION['UserName']) )
echo "ok";
session_destroy();
?>