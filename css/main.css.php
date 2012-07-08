<?php
/*
 * Copyright (C) 2011-2012 Alejandro Albarca <albarcam [arroba] gmail.com> and NETFLIE. <http://www.netflie.es>
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
 
 /**
 * @name       Main CSS
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011-2012 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @author     Alejandro Albarca Martinez
 */
header("Content-type: text/css");
header('Cache-Control: public, must-revalidate');
header('Pragma: no-cache');
header("Expires: " . date('D, j M Y H:i:s', time() + 3600 * 24 * 360) . " GMT");
header('Last-Modified: ' .  date('D, j M Y H:i:s', getlastmod()) . ' GMT');

if(extension_loaded('zlib')){ob_start('ob_gzhandler');} 
?>

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: Arial, Helvetica, sans-serif;
	vertical-align: baseline;
}
/* remember to define focus styles! */
:focus {
	outline: 0;
}
body {
	line-height: 1;
	color: #000;
	background: #FFF;
}
ol, ul {
	list-style: none;
}
/* tables still need 'cellspacing="0"' in the markup */
table {
	border-collapse: separate;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}


/* Header: actual and weekly reporting
 * ------------------------------------------- */
.ContenidoSuperior{
    left: 0px; 
    top: 0px; 
    z-index: -1;
}
.Stretch{
    z-index: -2; 
}
.ContenidoSuperior, .Stretch{
    position: absolute;
}
.Stretch2 {
    background: url(../images/background-submain.png) center center;
}
.ContenidoSuperior, .Stretch, .Stretch2{
     width: 100%;
     height: 100%;
     min-height: 600px;
     max-height: 1100px;
}

       /* Live weather section
       * ------------------------------------------- */
.MeteoContent{
     width: 950px;
     height: 400px;
     /*Hack IE transparente background*/
     filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
     zoom: 1;
     /* [END] Hack IE */
     background-color: rgba(0, 0, 0, 0.5);
     -moz-box-shadow: 0 0 15px #000;
     -webkit-box-shadow: 0 0 15px #000;
     box-shadow: 0 0 15px #000;
     margin-top: 150px;
     color: #FFF;
     padding: 10px;
     position: absolute;
}
/*Weather icons*/
.WeatherSprite{
     width: 175px; 
     height: 120px;
}
#temperatura, #viento{
     width: 460px;
     margin-top: 20px;
}
#tactual, #racha{
     width: 250px;
}
#tactual h2 {
     margin-right: 20px;   
}
#cloudHeight{
  width: 360px;
  height: 118px;
  background-image: url(../images/cloudheight.png);
}
#cloud{
  width: 60px;
  height: 30px;
  background: url(../images/cloud.png) no-repeat;
  padding-left: 45px;
  text-align: right;
  float: right;
}
table#precipitacion{
     margin-top: 60px;
}
.TdSection{
     padding-top: 15px;
}
#min{
     margin-right: 20px
}
#anemometro{
     width: 176px; 
     height:171px; 
     background:url(../images/anemometro.png);
}
#separador1{
     margin: 0 20px 0 0
}
#separador2{
     height: 300px; 
     margin: 0 20px 0 20px
}
#temperatura, #viento, #separador1{
     height: 200px;
}
#temperatura, #viento, #separador1, .WeatherSprite, #tactual, #anemometro, #vactual, #separador2, img#fotos, table#precipitacion, #racha{
     float: left;
}
#humedad, #presion, #cloudHeight{
     margin-left: 40px;
     clear: both;
}


/* Text
 * ------------------------------------------- */  
#precipitacion h1{
     font-size: 70%
}
#menu{
     font-size: 75%;
}
#footer, #form{
     font-size: 80%;
}
.MeteoContent p{
     font-size: 90%;
}
#humedad, #presion, table#precipitacion, #tactual h2{
     font-size: 150%;
}
#tactual h1, #vactual{
     font-size: 350%;
}
.texto_azul{
     color: #06F
}
.texto_rojo{
     color: #F30
}
.texto_marron{
     color: #630
}
.texto_verde{
     color: #690
}
#max{
     color: #FF6600
}
#min{
     color: #2C90EA;
}
#form{
     color: #CCC;
}
#footer, #footer a, #footer a:visited{
     color: #999;
}
#menu{
     color: #FFF;
}
.Bold, #menu{
     font-weight: 700;
}
#temperatura, #viento{
     text-align: center;
}
#tactual h1, #vactual{
     letter-spacing: 2px
}
#idioma a:link, #idioma a:visited{
     color: #FFF;
}
#idioma a:hover{
     color: #550000;
     text-decoration: none;
}
#idioma{
     line-height: 140%
}
#racha p{
     line-height: 20px;
}
#tactual h2{
     line-height: 40px;
}
#humedad, #presion{
     text-align: left;
     line-height: 60px;
}
#footer p{
     font-weight: 100;
     font-style: italic;
     line-height: 2
}


/* Footer
 * ------------------------------------------- */  
/* margin-top is calculate from js/main.js.php */
.ContenidoInferior{
     width: 100%;
     background: url(../images/background-footer.jpg) center;
     padding-top: 70px;
     box-shadow: 0pt 5px 20px #000 inset;
}
img#fotos, iframe#googlemaps{
     width: 470px;
     height: 300px;
     box-shadow: 0 0 15px #000;
}

       /* Photos section */
#fotos-thumb{
     width: 415px;
     margin: 20px 0 0 30px;
     float: left;
}
.Thumbnail{
     width: 100px;
     height: 70px;
     box-shadow: 0 0 15px #000;
     margin: 0 10px 0 10px;
     cursor: pointer;
}
.ImgSpriteNav{
     background: url(../images/img-nav.png) no-repeat;
     width: 20px;
     height: 20px;
     margin-top: 22px;	
}
#img-nav-izq{
     background-position: 0 0;
     float: left;
}
#img-nav-dcha{
     background-position: -21px 0;
     float: right;
}
       /* [END] Photos section */
       
       /* Contact form */       
#form{
     width: 400px;
     margin: 20px 0;
     float: right;
}
#form input {
     height: 20px; 
     margin: 5px;
}
#form input, #form textarea{
     background-color: #CCC;
     border: 1px solid  #CCC;
     border-radius: 2px; 
}
#form input:hover,#form textarea:hover {
     border-color: #B3B3B3
}
#form input:focus,#form textarea:focus {
      outline-width: medium;
      outline-style: none;
      border-color: #01AEDD;
      box-shadow: 0pt 2px 2px rgba(0, 0, 0, 0.3) inset;
}
       /* [END] Contact form */
       
#footer{
     background:url(../images/barra-footer.png) no-repeat;
     clear: both;
     padding: 16px 0 0 50px;
}
#logo{
     float:left; 
     margin: 35px 40px 0;
}


/* Other elements
 * ------------------------------------------- */ 
.ContenidoCentro{
     width: 1000px;
     margin: 0 auto;
}
.Separador{width: 3px; background:url(../images/puntos.png);}


/* Weekly reporting section
 * ------------------------------------------- */    
#menu{
     position: absolute; 
     margin-left: 11%
}
.ahora, .semana, .ahoraPulsado, .semanaPulsado, .idioma, .idiomaPulsado{
     width: 124px;
     height: 27px;
     background: url(../images/botones-menu.png) no-repeat;
     float: left;
     padding-top: 5px;
     cursor:pointer;
}
.ahora{
     background-position: -6px 0;
}
.semana{
     background-position: -137px 0
}
.idioma{
     background-position: -270px 0
}
#idioma{
     float: left;
}
#idiomaList{
     background-color: #8C0000;
     margin-left: 14px;
     width: 104px;
     display: none;
}
#idiomaSelect{
     padding-left: 8px
}
.ahora:hover, .semana:hover, .ahoraPulsado, .semanaPulsado, .idioma:hover, .idiomaPulsado{
     height: 40px;
}
.ahora:hover, .ahoraPulsado{
     background-position: -6px -33px
}
.semana:hover, .semanaPulsado{
     background-position: -137px -33px
}
.idioma:hover, .idiomaPulsado{
     background-position: -270px -33px
}

/* sliding panel */
#toppanel {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
#nubes{
	background:url(../images/nubes-background.png);
}
#nubes-inf{
	background:url(../images/nubes-background2.png);
	margin-top: 10px;
}
#nubes, #nubes-inf{
     height: 100px;
}
#panel{
	background-color: #333;
	border-bottom: 2px solid #999;
	display: none;
}
#resumenSemanal{
	margin: 20px auto 0;
        width: 780px;
	z-index: 2;
}    
th.borde_rlb_th_avisos_cab borde_t_cab, th.borde_rb_cab th.borde_t_cab, th.borde_rb no_wrap, th.borde_rlb_th_avisos, td.borde_b, td.borde_rb, td.alinear_texto_centro, td.borde_r alinear_texto_centro, th.borde_rlb_th_viento, th.borde_rlb_th_avisos_cab borde_t_cab{
	color: #000;
	background-color: #FFF;
	text-align: center;
	font-size: 75%;
	padding: 10px;
	font-family: Verdana, Geneva, sans-serif;
}
.tabla_datos {
	color:#000;
	font-weight:normal;
	text-decoration:none;
	text-align:left;
	border:0;
	width:777px;
	padding:0;
	vertical-align:top;
	margin-bottom:0;
	margin-top:0;
	empty-cells:show;
}
.tabla_datos tfoot {
	color:#4f86d8;
}
.tabla_datos a:link {
	text-decoration:none;
	padding-right:7px;
	color:#4f86d8;
	background-image:url(http://aemet.es/imagenes/gif/flechader_azul.gif);
	background-repeat:no-repeat;
	background-position:right center;
	display:block;
}
.tabla_datos a:link:hover {
	padding-right:7px;
	color:#757575;
	background-image:url(http://aemet.es/imagenes/gif/flechader_gris.gif);
	background-repeat:no-repeat;
	background-position:right center;
	display:block;
}
.tabla_datos a:visited {
	padding-right:7px;
	color:#757575;
	background-image:url(http://aemet.es/imagenes/gif/flechader_gris.gif);
	background-repeat:no-repeat;
	background-position:right center;
	display:block;
}
.tabla_datos a:visited:hover {
	padding-right:7px;
	color:#000;
	background-image:url(http://aemet.es/imagenes/gif/flechader_negro.gif);
	background-repeat:no-repeat;
	background-position:right center;
	display:block;
}
.tabla_datos_imagen_enlace a:link {
	text-decoration:none;
	padding-right:7px;
	color:#4f86d8;
	display:block;
	background-image:none;
}
.tabla_datos_imagen_enlace a:link:hover {
	text-decoration:none;
	padding-right:7px;
	color:#4f86d8;
	display:block;
	background-image:none;
}
.tabla_datos_imagen_enlace a:visited {
	text-decoration:none;
	padding-right:7px;
	color:#4f86d8;
	display:block;
	background-image:none;
}
.tabla_datos_imagen_enlace a:visited:hover {
	text-decoration:none;
	padding-right:7px;
	color:#4f86d8;
	display:block;
	background-image:none;
}
.tabla_datos td {
	padding-left:5px;
	padding-top:2px;
	padding-right:5px;
	padding-bottom:2px;
}
.tabla_datos_sinpadd {
	color:#000;
	font-weight:normal;
	border:0;
	width:100%;
	padding-top:0;
	padding-left:0;
	padding-bottom:0;
}
.tabla_datos_sinpadd td {
	padding:0;
	vertical-align:top;
}
.cabecera_niv1 th {
	background-color:#4f86d9;
	color:#fff;
	text-align:center;
	font-weight:normal;
	vertical-align:middle;
}
.cabecera_niv1_mid th {
	background-color:#4f86d9;
	color:#fff;
	text-align:center;
	font-weight:normal;
	vertical-align:middle;
}
.cabecera_niv1_bottom th {
	background-color:#4f86d9;
	color:#fff;
	text-align:center;
	font-weight:normal;
	vertical-align:bottom;
}
.cabecera_celda {
	font-weight:bold;
	text-align:left;
	vertical-align:bottom;
}
.cabecera_celda_center {
	font-weight:bold;
	text-align:center;
}
.cabecera_niv2 th {
	background-color:#95b6e9;
	font-weight:normal;
	color:#fff;
	text-align:center;
	vertical-align:middle;
}

<?php if(extension_loaded('zlib')){ob_end_flush();}?>