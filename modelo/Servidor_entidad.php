<?php

class servidor
{
	private $id_servidor;
        private $nombre;
        private $link_pelicula;
        
	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}


