<?php
function dbConnect()
{
	$db = new mysqli("localhost", "root", "", "db_rental_mobil");
	return $db;
}
?>