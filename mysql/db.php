<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // server, default username, default password, database to connect to
if (!$connection) {
	die('database connection failed');
}

?>