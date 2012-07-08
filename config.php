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

/**
 * @name       Config
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @version    $Id: config.php 2011-10-21 15:30
 * @author     Alejandro Albarca Martinez
 */
if (!defined('IN_WEB')) {
    exit();
}
/*
 * If the connection (XML_URI) is directly to your weather station, you must make sure your web server allows connections to the port 
 * that you set at your station. Shared hostings typically have only enabled the most common ports (FTP: 21, Mail: 25 and more).
 */

//Web configuration
  define('AEMET_ID'           , '07062'                ); // AEMET ID for weekly weather reporting(set empty ='' to disable)
  define('EMAIL'              , 'you@yourdomain.com'   );
  define('EMAIL_HEADER'       , 'MeteoLive - Contactar');
  define('LANG'               , 'es'                   ); // Default language
  define('TIMEZONE'           , 1                      ); // UTC Time. Spain: summer time(DST) =2; winter time =1
  define('STATION_LATITUDE'   , '39.601111'            ); // Your station latitude in decimal format39.601111
  define('STATION_LONGITUDE'  , '3.382222'             ); // Your station longitude in decimal format3.382222
  define('STATION_CITY'       , 'Cala Millor'          ); // Station city, region or town
  define('WEATHER_LIVE'       , false                  ); // If is set 'true' then the weather live reporting is enabled.
  define('WEATHER_UPDATE_TIME', 60                     ); // Weaather live reporting update time(seconds). For FTP-service minimum time is 60 seconds.
  define('XML_URI'            , 'http://meteocalamillor.es/all-sensors.xml'); // Your XML station file
  
//MetaTags for website
  define('TITLE'      , 'Cala Millor'                                            ); //Website title
  define('DESCRIPTION', 'El tiempo en vivo de Cala Millor'                       ); //Website description
  define('KEYWORDS'   , 'cala millor, el tiempo cala millor, cala millor weather'); //Website keywords

//Google Analytics account
  define('G_ACCOUNT', ''); // Your Google Analytics account ID (set empty if you don't have google analytics account)
  define('G_DOMAIN' , ''); // Your Google Analytics domain

//Units of measure
  define('U_DATE', 'local');    // ='local' o ='utc' for show local or utc date.
  define('U_HUM' , 'rel'  );    // ='abs' or ='rel' for humidity.
  define('U_TEMP', 'c'    );    // ='c' o ='f' for temperature.
  define('U_PRES', 'hpa'  );    // ='hpa' ='inhg', ='mmhg', ='psi' for pressure.
  define('U_WIND', 'kmh'  );    // ='ms', ='kmh', ='mph', ='kn' for wind.
  define('U_RAIN', 'mm'   );    // ='in', ='mm' for rain.
  
//Sensors specifications
  define('S_INSIDE' , 'thb0' );  // temperature/humidity/barometer inside sensor.
  define('S_OUTSIDE', 'th0'  );  // temperature/humidity outside sensor.
  define('S_RAIN'   , 'rain0');  // wind sensor report.
  define('S_WIND'   , 'wind0');  // rain sensor report.
  
//Other constants
  define('CIVIL_TWILIGHT', 96);
  define('NAUTICAL_TWILIGHT', 102);

  define('SUNSET' , date_sunset (time(), SUNFUNCS_RET_TIMESTAMP, STATION_LATITUDE, STATION_LONGITUDE, CIVIL_TWILIGHT, TIMEZONE));
  define('SUNRISE', date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, STATION_LATITUDE, STATION_LONGITUDE, CIVIL_TWILIGHT, TIMEZONE));
  define('TIME_NOW', time());
  
  // Background images saved in 'images' folder.
  define('W_BACKGROUND_DAY'  , 'background-day.jpg');
  define('W_BACKGROUND_NIGHT', 'background-night.jpg');