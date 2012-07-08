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
 * @name       Contact
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @version    $Id: contact.php 2011-10-21 15:30
 * @author     Alejandro Albarca Martinez
 */

define('IN_WEB', true);
if (!defined('IN_WEB')) {
  exit;
}
require_once('common.php');

$nombre  = htmlspecialchars($_POST['name']);
$email   = htmlspecialchars($_POST['email']);
$mensaje = htmlspecialchars($_POST['mensaje']);

$contenido  = 'Nombre: ' . "$nombre\n";
$contenido .= 'Email: '  . "$email\n\n";
$contenido .=  $mensaje;

mail(EMAIL, EMAIL_HEADER, $contenido);