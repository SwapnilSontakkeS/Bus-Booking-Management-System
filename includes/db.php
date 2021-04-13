<?php

// $connection = mysqli_connect("localhost",'root','','bus');

$connection = mysqli_connect("remotemysql.com",'Wv6pkhxcwK','5KjJz5bGXl','Wv6pkhxcwK');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>