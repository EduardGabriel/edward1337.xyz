<?php
$deny = array("");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://www.edward1337.xyz/404/");
   echo("BLACKLISTED IP ADDRESS");
   exit();
}
