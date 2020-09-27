<?php
session_start();
session_destroy();
setcookie('status','',time()-120);
header("Location: login.php");
?>