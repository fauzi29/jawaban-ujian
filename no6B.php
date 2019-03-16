<?php

	$host 	="localhost"; //host server
	$user 	="root"; //user login phpMyAdmin
	$pass 	=""; //pass login phpMyAdmin
	$db 	="db_gudang"; //nama database
	$conn 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
	/*soal B*/
	$q 		= mysqli_query($conn,"

							#====QUERYNYA DISINI====

							SELECT b.id, b.name AS product, GROUP_CONCAT(a.name) AS categories
							FROM products a
							LEFT JOIN categories b ON a.category_id = b.id
							GROUP BY b.name
	");

	$dat 	= mysqli_fetch_array($q);

	$dat 	= array_merge($dat);
	
	echo "INI DATA RESULT QUERYNYA : ";
	echo json_encode($dat);
?>