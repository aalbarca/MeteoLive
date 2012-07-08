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
 * @name       Common
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011-2012 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @author     Alejandro Albarca Martinez
 */

if (!defined('IN_WEB')) {
    exit();
}

//Session options
session_set_cookie_params(3600*24*365);

// Require files
require_once('config.php');
require_once('functions.php');

//Define dir separator
define('DIR_SEPARATOR', '/');

// Define path to application directory
defined('MAIN_PATH')
    || define('MAIN_PATH', realpath(dirname(__FILE__)));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(MAIN_PATH . '/includes'),
    get_include_path(),
)));

// Autoload function
function autoload($className){
  require_once($className . '.php');
}
spl_autoload_register('autoload');

// Set default language as LANG constant value. Automatic language search is activated.
$translate = new Translate(array(
    'locale' => LANG
    ));
check_language($translate); // Check if a GET language request exists.

// Preformatted units
preformatedd_units();