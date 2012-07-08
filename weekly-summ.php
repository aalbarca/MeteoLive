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
 * @name       Weekly summary
 * @package    MeteoLive
 * @copyright  Copyright (c) 2011-2012 NETFLIE. (http://meteolive.netflie.es)
 * @license    http://www.gnu.org/licenses/     GNU GPLv3
 * @version    $Id: weekly-summ.php 2011-10-21 15:30
 * @author     Alejandro Albarca Martinez
 */
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: public');
header("Expires: " . date('D, j M Y H:i:s', time() + 3600 * 4) . " GMT");
header('Last-Modified: ' .  date('D, j M Y H:i:s', getlastmod()) . ' GMT');

define('IN_WEB', true);
require_once('common.php');

$xsl_filename = 'resumen-semanal.xsl';
$xml_filename = 'http://www.aemet.es/xml/municipios/localidad_' . AEMET_ID . '.xml';

$doc = new DOMDocument();
$xsl = new XSLTProcessor();

$doc->load($xsl_filename);

$xsl->importStyleSheet($doc);

set_locale($translate); // This set_locale() function is not php built-in setlocale() function

@$xsl->setParameter('', 'hoy'       , utf8_encode(strftime('%a %d')));
@$xsl->setParameter('', 'manana'    , utf8_encode(strftime('%a %d', time() + (1 * 24 * 60 * 60))));
@$xsl->setParameter('', 'pasado'    , utf8_encode(strftime('%a %d', time() + (2 * 24 * 60 * 60))));
@$xsl->setParameter('', 'ppasado'   , utf8_encode(strftime('%a %d', time() + (3 * 24 * 60 * 60))));
@$xsl->setParameter('', 'pppasado'  , utf8_encode(strftime('%a %d', time() + (4 * 24 * 60 * 60))));
@$xsl->setParameter('', 'ppppasado' , utf8_encode(strftime('%a %d', time() + (5 * 24 * 60 * 60))));
@$xsl->setParameter('', 'pppppasado', utf8_encode(strftime('%a %d', time() + (6 * 24 * 60 * 60))));

$doc->load($xml_filename);

echo $xsl->transformToXML($doc);

