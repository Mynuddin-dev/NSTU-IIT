<?php
/* Log the user out from the system */
session_start();
session_destroy();
header("location:../index.php");


?>