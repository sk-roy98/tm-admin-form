<?php

session_start();
session_destroy();
echo "You have succesfully logged out.<br> click here to <a href= 'index.php' >login again</a>";

?>