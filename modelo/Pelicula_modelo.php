<?php

class pelicula_modelo
{
    private $pdo;
	public function __construct()
	{
		include('../config/conexion_bd.php');
	}
        
        public function listar_pelicula($ancho)
        {
            $aux="";
            if($ancho>=350 && $ancho<670){
                $aux="6";
                
            }else if($ancho>670 && $ancho<1200){
                $aux=8;
                
            }else if($ancho>1200){
                $aux=5;
                
            }
            $resultado= array();
            
            $stm=$this->pdo->prepare("SET NAMES 'utf8'");
            $stm->execute();
            
            $stm=$this->pdo->prepare("SELECT * FROM pelicula WHERE estreno='no' ORDER BY id_pelicula DESC LIMIT ".$aux."");
            $stm->execute();
            
            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                
            {
                $alm= new pelicula();
                
                $alm->__SET('id_pelicula', $r->id_pelicula);
                $alm->__SET('titulo', $r->titulo);
                $alm->__SET('genero', $r->genero);
                $alm->__SET('calidad', $r->calidad);
                $alm->__SET('año', $r->año);
                $alm->__SET('idioma', $r->idioma);
                $alm->__SET('servidor_id',$r->servidor_id);
                $alm->__SET('link_imagen',$r->link_imagen);
                $alm->__SET('sinopsis',$r->sinopsis);
                $alm->__SET('estreno',$r->estreno);
                $alm->__SET('categoria',$r->categoria);
                
                $resultado[]=$alm;
                
            }
            return $resultado;
            
        }
        
        public function listar_pelicula_estrenos($ancho)
        {
            $aux="";
            if($ancho>=350 && $ancho<670){
                $aux="6";
                
            }else if($ancho>670 && $ancho<1200){
                $aux=8;
                
            }else if($ancho>1200){
                $aux=5;
                
            }
            
            
            $resultado= array();
            
            $stm=$this->pdo->prepare("SET NAMES 'utf8'");
            $stm->execute();
            
            $stm=$this->pdo->prepare("SELECT * FROM pelicula WHERE estreno='si' ORDER BY id_pelicula DESC LIMIT ".$aux."");
            $stm->execute();
            
            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
                
            {
                $alm= new pelicula();
                
                $alm->__SET('id_pelicula', $r->id_pelicula);
                $alm->__SET('titulo', $r->titulo);
                $alm->__SET('genero', $r->genero);
                $alm->__SET('calidad', $r->calidad);
                $alm->__SET('año', $r->año);
                $alm->__SET('idioma', $r->idioma);
                $alm->__SET('servidor_id',$r->servidor_id);
                $alm->__SET('link_imagen',$r->link_imagen);
                $alm->__SET('sinopsis',$r->sinopsis);
                $alm->__SET('estreno',$r->estreno);
                $alm->__SET('categoria',$r->categoria);
                
                $resultado[]=$alm;
                
            }
            return $resultado;
            
        }
}


