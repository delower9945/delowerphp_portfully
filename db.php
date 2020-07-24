<?php 

	define('Hostname', 'localhost');
	define('users', 'root');
	define('password', '');
	define('db_name', 'fullproject');
	

	


	$db_conect=mysqli_connect(Hostname,users,password,db_name);

	if (!$db_conect) {
		echo "coneted time out";
	}


 ?>