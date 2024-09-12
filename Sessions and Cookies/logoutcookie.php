<?php
session_start();

$expire = time() - (86400 *30);
setcookie('user',$_COOKIE['user'],$expire,'/');

header('location: logincookie.php ');

?>