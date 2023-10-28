<?php
include('models/database.php');

session_destroy();
header("location:index.php");

?>