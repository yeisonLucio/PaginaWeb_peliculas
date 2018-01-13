<?php

class producto_modelo
{
    private $pdo;
	public function __construct()
	{
		include('../config/conexion_bd.php');
	}
        
        public function listar_productos()
        {
            $resultado= array();
            
            $stm=$this->pdo->prepare("SET NAMES 'utf8'");
            $stm->execute();
            
            $stm=$this->pdo->prepare("select * from servidor");
            $stm->execute();
            
            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                
            {
                $alm= new producto();
                
                $alm->__SET('id_servidor', $r->id_servidor);
                $alm->__SET('nombre', $r->nombre);
                $alm->__SET('link_pelicula', $r->link_pelicula);
                
                
                $resultado[]=$alm;
                
            }
            return $resultado;
            
        }
}
