<?php
session_start();
session_unset("userInfo");
header("location: index.php");
exit;