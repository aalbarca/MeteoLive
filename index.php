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
 * @name       Index
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @author     Alejandro Albarca Martinez
 */

//Headers
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: public, must-revalidate');
header('Pragma: no-cache');
header("Expires: " . date('D, j M Y H:i:s', time() + 3600 * 24 * 30) . " GMT");

if(extension_loaded('zlib')){ob_start('ob_gzhandler');}

// Includes
define('IN_WEB', true);
require_once('common.php');
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MeteoLive - <?php echo TITLE ?></title>
<meta name="description" content="<?php echo  DESCRIPTION ?>" />
<meta name="keywords" content="<?php echo KEYWORDS ?>" />
<meta name="author" content="Alejandro Albarca Martinez [www.netflie.es]" />
<link rel="stylesheet" type="text/css" href="css/main.css.php" />
<script type="text/javascript" src="js/main.js.php"></script>
<?php google_analytics();?>
</head>
  
<body>
  <?php if (!(AEMET_ID === '')){?>
  <!-- Weekly weather forecast -->
  <div id="toppanel">
    <div id="panel">
      <div id="nubes"></div>
      <div id="resumenSemanal"></div>
      <div id="nubes-inf"></div>
    </div>
    <div id="menu">
      <div id="ahora" class="ahoraPulsado"><?php echo $translate->_('now');?></div>    
      <div id="semana" class="semana"><?php echo $translate->_('this-week');?></div>
      <div id="idioma">
         <div id="idiomaList"><?php show_language_list($translate)?></div>
         <div id="idiomaSelect" class="idioma"><?php echo $translate->_($translate->getLocale());?></div>
      </div>
    </div>
  </div>
  <!-- / Weekly weather forecast -->
  <?php }?>
  
  <!-- Weather Live information -->
  <div class="ContenidoSuperior" id="contenidosuperior">
    <?php background_img();?>
    <div class="Stretch2">
      <div class="ContenidoCentro">
        <div class="MeteoContent"></div>
      </div>   
    </div>   
    
  </div>
  <!-- / Weather Live information -->
  
  <!-- Footer -->
  <div class="ContenidoInferior">
    
    <div class="ContenidoCentro">
      
      <img src="images/album_1.jpg" id="fotos" alt="<?php echo $translate->_('photos');?>" /> <!-- Main photo for photos section -->
      <div class="Separador" id="separador2"></div>
      <iframe id="googlemaps" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=<?php echo STATION_LATITUDE . ',+' . STATION_LONGITUDE?>&amp;ie=UTF8&amp;t=m&amp;z=14&amp;vpsrc=0&amp;ll=<?php echo STATION_LATITUDE . ',' . STATION_LONGITUDE?>&amp;output=embed"></iframe>
      
      <!-- Photos section -->
      <div id="fotos-thumb">
        <!--<span class="ImgSpriteNav" id="img-nav-izq"></span>-->
        <img src="images/album_1.jpg" class="Thumbnail" alt="METEOLIVE" /> 
        <img src="images/album_2.jpg" class="Thumbnail" alt="METEOLIVE" /> 
        <img src="images/album_3.jpg" class="Thumbnail" alt="METEOLIVE" /> 
        <!--<span class="ImgSpriteNav" id="img-nav-dcha"></span>-->
      </div>
      <!-- / Photos section -->
      
      <!-- Contact form -->
      <div id="form">
        <form action="" method="post">
          <table border="0" align="center">
            <tr>
              <td><label for="nombre"><?php echo $translate->_('name');?>: </label></td>
              <td><input type="text" name="nombre" size="30" id="nombre" /><br />
                  <label class="error" for="nombre" id="name_error"><?php echo $translate->_('required-field');?></label></td>
            </tr>
            <tr>
              <td><label for="email" ><?php echo $translate->_('email');?>: </label></td>
              <td><input type="text" name="email" size="30" id="email" /><br />
                  <label class="error" for="email" id="email_error"><?php echo $translate->_('required-field');?></label></td>
            </tr>
          </table>
          <textarea cols="36" rows="5" name="mensaje" id="mensaje"></textarea><br />
          <label class="error" for="email" id="mensaje_error"><?php echo $translate->_('required-field');?></label>
          <br />
          <br />
          <input type="submit" value="<?php echo $translate->_('send');?>" id="submitForm" />
        </form>
      </div>
      <!-- /Contact form -->
      
      <!-- Footer credits -->   
      <!-- ATTENTION: You can remove this attribution-logo but you have to recognize NETFLIE.es as the author of this work
      through a text on this website. -->
      <a href="http://meteolive.netflie.es"><img src="images/logo.png" width="170" height="120" id="logo" alt="netflie.es" /></a>
      <!-- / ATTENTION -->
      
      <div id="footer" class="Bold">NETFLIE. © 2011-2012 | <a href="http://netflie.es/aviso"><?php echo $translate->_('disclaimer');?></a>
                       <!-- Image-backgrounds credits -->
                       <p><?php echo $translate->_('the-images');?> <a href="http://www.flickr.com/photos/petergorges/5825701864/in/photostream/">"New York Sky"</a>
                         <?php echo $translate->_('and');?> <a href="http://www.flickr.com/photos/lrargerich/4736230058/in/photostream/">"Eta Carina &amp; Shooting Star"</a>
                         <?php echo $translate->_('are-owned-by');?> Peter Gorges y Luis Argerich, <?php echo $translate->_('respectively');?>.
                       </p> 
                       <!-- / Image-backgrounds credits -->
      </div>
      <!-- / Footer credits -->
      
    </div>
  </div>
  <!-- / Footer -->
  
</body>
</html>

<?php if(extension_loaded('zlib')){ob_end_flush();}?>