<?php

class pelicula
{
	private $id_pelicula;
        private $titulo;
        private $genero;
        private $calidad;
        private $año;
        private $idioma;
        private $servidor_id;
        private $link_imagen;
        private $sinopsis;
        private $estreno;
        private $categoria;
               
	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}

