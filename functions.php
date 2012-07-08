<?php

/*
 * Copyright (C) 2011-2012 Alejandro Albarca Martínez <albarcam [arroba] gmail.com> and NETFLIE. (http://www.netflie.es)
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
 *
 * @name       Functions
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011-2012 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @author     Alejandro Albarca Martinez
 */
if (!defined('IN_WEB')) {
  exit();
}
require_once('config.php');

// FUNCTIONS BEGIN

function apparent_temp() {
  if (ACTUAL_TEMP >= 27 && ACTUAL_HUM >= 40) {
    echo $translate->_('heatindex') . ': ' . ACTUAL_HEATINDEX . ' ' . PRE_U_TEMP;
  } else if (ACTUAL_TEMP < 10 && ACTUAL_WIND >= 5) {
    echo $translate->_('windchill-temp') . ': ' . ACTUAL_WINDCHILL . ' ' . PRE_U_TEMP;
  }
}

function background_img() {
  if (TIME_NOW > SUNRISE && TIME_NOW < SUNSET) {
    $background = W_BACKGROUND_DAY;
  } else {
    $background = W_BACKGROUND_NIGHT;
  }

  echo "<img src='images/$background' class='Stretch' alt='background_img' />";
}

function check_language($translate) {
  if (!isset($_SESSION)) {
    session_start();
  }

  if (!empty($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
  }

  if ($translate instanceof Translate && !empty($_SESSION['lang'])) {
    $locale = $_SESSION['lang'];
    $translate->setAutomatic(false);
    $translate->setLocale($locale);
  }
}

function google_analytics() {
  if (!(G_ACCOUNT === '')) {
    echo "
      <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '" . G_ACCOUNT . "']);
        _gaq.push(['_setDomainName', '" . G_DOMAIN . "']);
        _gaq.push(['_trackPageview']);
  
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>";
  }
}

function last_modified_head() {
  if ($data = file_get_contents('data') !== FALSE){
    $data = unserialize($data);
    extract($data);
    
    echo($data['sem_cache']);
  } else {
    //create_file_data()
  }
}

function preformatedd_units() {
  // Temperature
  if (U_TEMP == 'c')
    define('PRE_U_TEMP', 'ºC');
  else if (U_TEMP == 'f')
    define('PRE_U_TEMP', 'ºF');
  else
    trigger_error(U_TEMP . ' is incorrect temp. unit', E_USER_ERROR);
  // Humidity
  if (U_HUM == 'abs')
    define('PRE_U_HUM', 'g/m²');
  else if (U_HUM == 'rel')
    define('PRE_U_HUM', '%');
  else
    echo 'Incorrect hum. unit';
  // Pressure
  if (U_PRES == 'hpa')
    define('PRE_U_PRES', 'hPa');
  else if (U_PRES == 'inhg')
    define('PRE_U_PRES', 'inHg');
  else if (U_PRES == 'mmhg')
    define('PRE_U_PRES', 'mmHg');
  else if (U_PRES == 'psi')
    define('PRE_U_PRES', 'Psi');
  else
    echo 'Incorrect press. unit';
  // Wind
  if (U_WIND == 'ms')
    define('PRE_U_WIND', 'm/s');
  else if (U_WIND == 'kmh')
    define('PRE_U_WIND', 'km/h');
  else if (U_WIND == 'mph')
    define('PRE_U_WIND', 'm/h');
  else if (U_WIND == 'kn')
    define('PRE_U_WIND', 'knots');
  else
    echo 'Incorrect wind unit';
  // Rain
  if (U_RAIN == 'in')
    define('PRE_U_RAIN', 'in');
  else if (U_RAIN == 'mm')
    define('PRE_U_RAIN', 'mm');
  else
    echo 'Incorrect rain unit';
}

function set_locale($translate) {
  $locale = $translate->getLocale();
  if ($locale == 'en')
    $locale = 'en_US';
  else
    $locale = $locale . '_' . strtoupper ($locale);
  setlocale(LC_TIME, $locale);
}

function show_language_list($translate){
  $languagesList = $translate->getList();
  foreach($languagesList as $lang)
   echo "<a href='?lang=$lang' >" . $translate->_($lang) . '</a> <br />';
}

function weather_icon() {
  if (ACTUAL_RAIN > 0 && ACTUAL_TEMP < 3)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/20.png)"></div>';
  else if (ACTUAL_RAIN > 60)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/24.png)"></div>';
  else if (ACTUAL_RAIN > 20)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/14.png)"></div>';
  else if (ACTUAL_RAIN > 0)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/17.png)"></div>';
  else if (ACTUAL_WIND > 30)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/25.png)"></div>';
  else if (TIME_NOW > SUNRISE && TIME_NOW < SUNSET)
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/21.png)"></div>';
  else
    echo '<div class="WeatherSprite" style="background-image: url(images/weather_icons/1.png)"></div>';
}
