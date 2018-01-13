<?php

try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=bd_pag_peliculas','root' ,'');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
?>

