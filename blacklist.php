<?php
$deny = array("109.98.132.224","79.117.203.75");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://www.edward1337.xyz/404/");
   echo("BLACKLISTED IP ADDRESS");
   exit();
}
