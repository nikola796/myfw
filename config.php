<?php

return array(

'database' => array(
'host' => 'mysql:host=localhost',
'db_name' => '',
'user' => '',
'password' => '',
'option' => array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"

	)
)
	);