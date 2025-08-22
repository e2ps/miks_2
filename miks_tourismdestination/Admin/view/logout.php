<?php
session_start();
session_destroy();
header("Location: http://localhost/Sabillo/miks_tourismdestination/view/index.php?page=index");
?>