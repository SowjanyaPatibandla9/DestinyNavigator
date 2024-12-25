<?php

session_start();
session_unset();
session_destroy();
echo"<script> window.open('../index11.php','_self')</script>";

?>