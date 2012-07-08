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
 * @name       Infometeo
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011-2012 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @author     Alejandro Albarca Martinez
 */
//Headers
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: public, must-revalidate');
header('Pragma: no-cache');
header("Expires: " . date('D, j M Y H:i:s', time() + 60 * 5) . " GMT");
header('Last-Modified: ' .  date('D, j M Y H:i:s', getlastmod()) . ' GMT');

if(extension_loaded('zlib')){ob_start('ob_gzhandler');}

// Includes
define('IN_WEB', true);
require_once('common.php');
require_once('../PHPWeatherStation/Station.php');

// Create a Station object
$sensors = array(S_INSIDE, S_OUTSIDE, S_RAIN, S_WIND);
$units   = array(U_DATE, U_HUM, U_PRES, U_TEMP, U_RAIN, U_WIND);
$st      = new Station(XML_URI, $sensors, $units);

// Define constant values
define('ACTUAL_HEATINDEX', $st->actual_outside_heatindex    );
define('ACTUAL_HUM',       $st->actual_outside_hum          );
define('ACTUAL_PRES',      $st->actual_inside_sealevel      );
define('ACTUAL_TEMP',      $st->actual_outside_temp         );
define('ACTUAL_TEMP_MAX',  $st->day1_outside_tempmax        );
define('ACTUAL_TEMP_MIN',  $st->day1_outside_tempmin        );
define('ACTUAL_RAIN',      $st->actual_rain_rate            );
define('ACTUAL_WIND',      $st->actual_wind_gustspeed       );
define('ACTUAL_WINDCHILL', $st->actual_wind_chill           );
define('DEG',              $st->actual_wind_dir_deg         );
define('CLOUD_HEIGHT',     $st->actual_outside_cloudheight_m);
define('LAST60M_RAIN',     $st->last60m_rain_total          );
define('LAST_UPDATE',      $st->actual_date_date2           );
if (CLOUD_HEIGHT >= 2500) {
  define('MAX_CLOUD_HEIGHT', CLOUD_HEIGHT + 100);
} else {
  define('MAX_CLOUD_HEIGHT', 2500);
}
define('MONTH_MAX_WIND',   $st->month1_wind_gustspeedmax    );
define('MONTH_RAIN',       $st->month1_rain_total           );
define('TODAY_MAX_WIND',   $st->day1_wind_gustspeedmax      );
define('TODAY_RAIN',       $st->day1_rain_total             );
define('YEAR_MAX_WIND',    $st->year1_wind_gustspeedmax     );
define('YEAR_RAIN',        $st->year1_rain_total            );
?>

  <!-- HTML CONTENT BEGIN -->
  
    <script type="text/javascript">
        $(document).ready(function(){
           cont = <?php echo WEATHER_UPDATE_TIME?>;
          
           var cloudHeight    = <?php echo CLOUD_HEIGHT;?>;
           var cloudHeightMax = <?php echo MAX_CLOUD_HEIGHT;?>; // Maximum height clouds(meters)
           $('#cloud').attr('style', 'margin-top: ' + (86 - (86 / (cloudHeightMax / cloudHeight))) + 'px');
           
           var grados = <?php echo DEG;?>;
           $("#flecha").rotate(grados);          
        });
    </script>  

    <p class="Bold">
      <?php echo STATION_CITY. ' - ' . $translate->_('last-update') . ': ' . LAST_UPDATE;?> - 
      <?php echo $translate->_('next-update')?> <span id="next_update"></span> <?php echo $translate->_('seconds')?>
    </p>
    
    <!-- Temperature && weather icon section -->
    <div id="temperatura">
      <?php weather_icon();?>
      <div id="tactual">
        <h1><?php echo ACTUAL_TEMP . ' ' . PRE_U_TEMP;?></h1>
        <h3 id ="taparente"><?php apparent_temp($translate);?></h3>
        <h2>
          <span id="min"><?php echo ACTUAL_TEMP_MIN . ' ' . PRE_U_TEMP;?></span>
          <span id="max"><?php echo ACTUAL_TEMP_MAX . ' ' . PRE_U_TEMP;?></span>
        </h2>
      </div>
      <!-- / Temperature && weather icon section -->
      
      <!-- Cloud height section -->
      <div id="cloudHeight">
        <div id="cloud"><?php echo CLOUD_HEIGHT;?> m.</div>
      </div>
      <!-- / Cloud height section -->
      
      <!-- Pressure && humidity section -->
      <p id="presion"><?php echo $translate->_('pressure') . ': ' . ACTUAL_PRES . ' ' . PRE_U_PRES;?></p>
      <p id="humedad"><?php echo $translate->_('humidity') . ': ' . ACTUAL_HUM  . ' ' . PRE_U_HUM;?></p>
      <!-- / Pressure && humidity section -->
      
    </div>
    <div class="Separador" id="separador1"></div>
    
    <!-- Wind section -->
    <div id="viento">
      <div id="anemometro">
        <img src="images/flecha.png" id="flecha"  />
      </div>
      <span id="vactual">
        <?php echo ACTUAL_WIND . ' ' . PRE_U_WIND;?>
      </span>
      <div id="racha">
      <p class="Bold"><?php echo $translate->_('gustspeedmax')?></p>
      <p><?php echo $translate->_('today') . ': ' . TODAY_MAX_WIND . ' ' . PRE_U_WIND;?></p>
      <p><?php echo $translate->_('month') . ': ' . MONTH_MAX_WIND . ' ' . PRE_U_WIND;?></p>
      <p><?php echo $translate->_('year')  . ': ' . YEAR_MAX_WIND  . ' ' . PRE_U_WIND;?></p>
      </div>
      <!-- Wind section -->
      
      <!-- Rain section -->
      <table width="400" border="0" id="precipitacion">
        <tr>
          <td>
            <h1><?php echo $translate->_('rain') . ':';?></h1>
          </td>
        </tr>
        <tr>
          <td><?php echo $translate->_('now');?></td>
          <td><?php echo $translate->_('last-hour');?></td>
          <td><?php echo $translate->_('today');?></td>
        </tr>
        <tr>
          <td>
            <?php echo ACTUAL_RAIN . ' ' . PRE_U_RAIN;?>
          </td>
          <td>
            <?php echo LAST60M_RAIN . ' ' . PRE_U_RAIN;?>
          </td>
          <td>
            <?php echo TODAY_RAIN . ' ' . PRE_U_RAIN;?>
          </td>
        </tr>
        <tr>
          <td class="TdSection"><?php echo $translate->_('this-month');?></td>
          <td class="TdSection"><?php echo $translate->_('this-year');?></td>
        </tr>      
        <tr>
          <td>
            <?php echo MONTH_RAIN . ' ' . PRE_U_RAIN?>
          </td>
          <td>
            <?php echo YEAR_RAIN . ' ' . PRE_U_RAIN;?>
          </td>
        </tr>
      </table>
      <!-- / Rain section -->
    </div>
    
<?php if(extension_loaded('zlib')){ob_end_flush();}?>