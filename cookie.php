<?php
echo "welcome to cookies <br>";
$cookie_name = "category";
$cookie_value ="Electronics";
setcookies($cookie_name,$cookie_value,time()+3600);
echo "<br>cookie is set"
?>