<?php

session_start();
echo "Welcome " . $_SESSION['name'] . "<br>";
echo $_SESSION['email'] . "<br>";
echo "<a href = 'logout.php'> logout </a>" 

?>