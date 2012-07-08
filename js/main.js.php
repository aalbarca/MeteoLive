<?php
/*
 * Copyright (C) 2011 Alejandro Albarca <albarcam [arroba] gmail.com> and NETFLIE. <http://www.netflie.es>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program, in the file called "COPYING".  If not, see <http://www.gnu.org/licenses/>.
 */
header('Cache-Control: public');
header("Expires: " . date('D, j M Y H:i:s', time() + 3600 * 24 * 360) . " GMT");
header('Last-Modified: ' .  date('D, j M Y H:i:s', getlastmod()) . ' GMT');

if(extension_loaded('zlib')){ob_start('ob_gzhandler');}

define('IN_WEB', true);
require_once('../common.php');
require_once('jquery-1.6.4.min.js');
require_once('jQueryRotate.2.1.js');
require_once('jrumble.1.1.min.js');
?>

// Variables globales
var cont = <?php echo WEATHER_UPDATE_TIME?>;

//Funciones
function updateMeteo(){
  $('.MeteoContent').load('infometeo.php' + "?rand=" + Math.random()*10000);
}

function contador(){
  cont -= 1;
  if (cont >= 0){
      <?php if (WEATHER_LIVE){?>
      $('#next_update').text(cont);
      <?php }?>
  }
}

//BEGIN
$(document).ready(function(){

    //Contador cuenta atrás
    interval = setInterval(contador, 1000);

    // Ajustar header y footer
    var divh = document.getElementById('contenidosuperior').offsetHeight;
    $('.ContenidoInferior').attr('style','margin-top:' + divh + 'px');
    $(window).resize(function() {
       var divh = document.getElementById('contenidosuperior').offsetHeight;
       $('.ContenidoInferior').attr('style','margin-top:' + divh + 'px');
    });

    updateMeteo();
    <?php if (WEATHER_LIVE) echo 'setInterval( "updateMeteo()", ' . WEATHER_UPDATE_TIME * 1000 . ');';?>
    $('#resumenSemanal').load('weekly-summ.php' + "?rand=" + Math.random()*10000);
    
    //Control formulario de contacto
    $('.error').hide();
    $("#submitForm").click(function() {
		
      // validación
      $('.error').hide();
  	  var name = $("input#nombre").val();
  		if (name == "") {
        $("label#name_error").show();
        $("input#nombre").focus();
        return false;
      }
  		var email = $("input#email").val();
  		if (email == "") {
        $("label#email_error").show();
        $("input#email").focus();
        return false;
      }
  		var mensaje = $("textarea#mensaje").val();
  		if (mensaje == "") {
        $("label#mensaje_error").show();
        $("textarea#mensaje").focus();
        return false;
      }
	  
	  // procesado
	  var dataString = 'name='+ name + '&email=' + email + '&mensaje=' + mensaje;
      //alert (dataString);return false;
      $.ajax({
       type: "POST",
       url: "enviar.php",
       data: dataString,
       success: function() {
         $('#submitForm').remove();
         $('#form').append("<p>Mensaje enviado</p>");
       }
    });
    return false;
  });
  
  //Álbum imágenes
  $('.Thumbnail').jrumble({rumbleSpeed: 50}); //¡Hacer temblad los thumbnails! :D
  
   $(".Thumbnail").click(function(evento){
	   var srcImagen = $(this).attr('src');
	   $("#fotos").fadeOut(700, function(){
		   $(this).attr('src', srcImagen);
	       $(this).fadeIn(1000);
	   });	   
   });
   
   //Control panel superior
	// Language panel
        $("#idiomaSelect").click(function(){
	    $("#idiomaList").toggle();
	});
   	// Expand Panel
	$("#semana").click(function(){
	    $(".ahoraPulsado").attr("class", "ahora");
	    $(this).attr("class", "semanaPulsado");
	    $("div#panel").slideDown("slow");     
	});
 
	// Collapse Panel
	$("#ahora").click(function(){
	    $(".semanaPulsado").attr("class", "semana");
	    $(this).attr("class", "ahoraPulsado");
	    $("div#panel").slideUp("slow");
	});
});

<?php if(extension_loaded('zlib')){ob_end_flush();}?>