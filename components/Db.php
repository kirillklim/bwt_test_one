<?php

class Db
{

		public static function getConnection()
		{
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);

            //echo $params['dbname'];
              // $db = mysqli_connect($params['host'],$params['user'],$params['password']);
              // mysqli_select_db ($params['dbname'],$db);
             $opt = [
		        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		       
		    ];

			 $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			 $db = new PDO($dsn, $params['user'], $params['password'],$opt);
            
			return $db;
		}
}