
$(function(){
//    $('#li_curso').click(function(){
//        listar("curso");
//        console.log("voy a cargar el form_curso.html");
//        $("#mostrar_datos").load('vista/form_curso.html');
//   });
        // ancho
    $(window).height(); 
    
    var ancho=screen.width;
    
    listar("pelicula",ancho);
    listar_estrenos("pelicula",ancho);
    
    
});

function listar(v_nombre_tabla,ancho)
{
     //event.preventDefault();
    var v_action = "listar";
    //cargar el controlador de la respectiva tabla
    //var v_controlador ="../ctrl/controlador_"+v_nombre_tabla+".php";
    var v_controlador ="controladores/controlador_"+v_nombre_tabla+".php";
    $.ajax({
        type: "POST",
        url: v_controlador,
        data:	{
            action: v_action,
            nombre_tabla:v_nombre_tabla,
            ancho:ancho
        },
        dataType: 'text', 
        beforeSend: function() { 
         console.log("v_nombre_tabla: " + v_nombre_tabla + "v_accion: "+v_action+", v_controlador: "+v_controlador);
        },
        success: function(data)
        {
            console.log("!! successsss   !!"+ data);
           
            
            if(data !== null)
            {
                
                
               $('#lista_'+v_nombre_tabla).text('');
           var $log = $( "#lista_"+v_nombre_tabla ),
          str = data,
          html = $.parseHTML( str );
          
        $log.append( html );

        // Gather the parsed HTML's node names
             
            }
            
            
        },
        error: function( jqXHR, textStatus, errorThrown ) 
        {
            if (jqXHR.status === 0) { alert('Not connect: Verify Network.');  } 
            else if (jqXHR.status == 404) { alert('Requested page not found [404]'); } 
                 else if (jqXHR.status == 500) { alert('Internal Server Error [500].');  } 
                      else if (textStatus === 'parsererror') {	alert('Requested JSON parse failed.');  } 
                           else if (textStatus === 'timeout') {alert('Time out error.');  } 
                                 else if (textStatus === 'abort') { alert('Ajax request aborted.');  } 
                                      else { alert('Uncaught Error: ' + jqXHR.responseText); 	}
        },
        complete: function() 
        {
                //$('#ajax-loader').hide();
        }
    });

}

function listar_estrenos(v_nombre_tabla,ancho)
{
     //event.preventDefault();
    var v_action = "listar_estrenos";
    //cargar el controlador de la respectiva tabla
    //var v_controlador ="../ctrl/controlador_"+v_nombre_tabla+".php";
    var v_controlador ="controladores/controlador_"+v_nombre_tabla+".php";
    $.ajax({
        type: "POST",
        url: v_controlador,
        data:	{
            action: v_action,
            nombre_tabla:v_nombre_tabla,
            ancho:ancho
           
        },
        dataType: 'text', 
        beforeSend: function() { 
         console.log("v_nombre_tabla: " + v_nombre_tabla + "v_accion: "+v_action+", v_controlador: "+v_controlador);
        },
        success: function(data)
        {
            console.log("!! successsss   !!"+ data);
           
            
            if(data !== null)
            {
                
                
               $('#lista_estrenos').text('');
           var $log = $( "#lista_estrenos" ),
          str = data,
          html = $.parseHTML( str );
          
        $log.append( html );

        // Gather the parsed HTML's node names
             
            }
            
            
        },
        error: function( jqXHR, textStatus, errorThrown ) 
        {
            if (jqXHR.status === 0) { alert('Not connect: Verify Network.');  } 
            else if (jqXHR.status == 404) { alert('Requested page not found [404]'); } 
                 else if (jqXHR.status == 500) { alert('Internal Server Error [500].');  } 
                      else if (textStatus === 'parsererror') {	alert('Requested JSON parse failed.');  } 
                           else if (textStatus === 'timeout') {alert('Time out error.');  } 
                                 else if (textStatus === 'abort') { alert('Ajax request aborted.');  } 
                                      else { alert('Uncaught Error: ' + jqXHR.responseText); 	}
        },
        complete: function() 
        {
                //$('#ajax-loader').hide();
        }
    });

}