<?php
		include 'Database.config.php';
		class Connect
		{
			public function connect()
			{
				$this->connect = mysqli_connect($GLOBALS['config']['host'],$GLOBALS['config']['user'],$GLOBALS['config']['password'],$GLOBALS['config']['dbname']);
				try{
					if(!$this->connect){
						throw new Exception("error na conexão");
					}
				}catch(Exception $e){
					echo 'Resolver: ' .  $e;
				}
			}
		}
 ?>
