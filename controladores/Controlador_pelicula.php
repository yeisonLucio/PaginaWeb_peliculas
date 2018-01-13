<?php

    require_once '../modelo/Pelicula_modelo.php';
    require_once '../modelo/Pelicula_entidad.php';

    $alm= new pelicula();
    $modelo= new pelicula_modelo();

    if(isset($_REQUEST['action']))
    {
        switch ($_REQUEST['action'])
        {
            case 'listar':
            
                $stm="";
                $i=0;

                foreach( $modelo->listar_pelicula($_REQUEST['ancho']) as $r):

                    $stm=$stm."<li id='item'><div id='cont'>

                                    <div class='container' id='div_img'><a href='#' ><img id='img_caratula' src=".$r->__GET('link_imagen')." class='img-responsive'></a></div>
                                    <div id='texto' ><a id='titulo'class='btn' href='#'>".$r->__GET('titulo')."</a>
                                    <span class='año'>".$r->__GET('año')."</span><span class='calidad'>".$r->__GET('calidad')."</span></div>  
                                </div></li>";
                endforeach;
            echo utf8_decode($stm);
            break;
            
            case 'listar_estrenos':
                $stm="";
                $i=0;
           
                foreach( $modelo->listar_pelicula_estrenos($_REQUEST['ancho']) as $r):
               $ancho=$_REQUEST['ancho'];     
                
              
                 $stm=$stm."<li id='item'><div id='cont'>

                                    <div class='container' id='div_img'><a href='#' ><img id='img_caratula' src=".$r->__GET('link_imagen')." class='img-responsive'></a></div>
                                    <div id='texto' ><a id='titulo' class='btn' href='#'>".$r->__GET('titulo')."</a>
                                    <span class='año'>".$r->__GET('año')."</span><span class='calidad'>".$r->__GET('calidad')."</span></div>  
                                </div></li>";
                endforeach;
                echo utf8_decode($stm);
                
            break;
        }


    }

