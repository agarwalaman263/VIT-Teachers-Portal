<?php
echo '<script>console.log("Your stuff here")</script>';
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location:index.php');

?>