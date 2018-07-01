<?php

require_once("config.php");

session_unset($_SESSION["Nome"]);

echo $_SESSION["Nome"];

session_destroy();

?>