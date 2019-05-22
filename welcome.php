<?php
session_start();

echo "<h1>Welcome ".$_SESSION['fullname']."</h1>";

session_destroy();
?>