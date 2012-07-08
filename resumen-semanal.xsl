<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE xsl:stylesheet  [
	<!ENTITY nbsp   "&#160;">
	<!ENTITY copy   "&#169;">
	<!ENTITY reg    "&#174;">
	<!ENTITY trade  "&#8482;">
	<!ENTITY mdash  "&#8212;">
	<!ENTITY ldquo  "&#8220;">
	<!ENTITY rdquo  "&#8221;"> 
	<!ENTITY pound  "&#163;">
	<!ENTITY yen    "&#165;">
	<!ENTITY euro   "&#8364;">
]>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="utf-8"/>
<xsl:template match="/">

<table id="tabla_prediccion" summary="Esta tabla muestra la predición para el municipio de Son Servera, los datos se muestran detallados para hoy en 6 días." class="tabla_datos marginbottom10px" cellspacing="2">
  <thead >
    <tr class="cabecera_niv1">
      <th class="borde_rlb_th_avisos_cab borde_t_cab" title="Fecha" abbr="Fec." rowspan="2"><div  class="cabecera_celda">Fecha</div></th>
      <th class="borde_rb_cab borde_t_cab" colspan="2" ><xsl:copy-of select="$hoy" /></th>
      <th class="borde_rb_cab borde_t_cab" colspan="4" ><xsl:copy-of select="$manana" /></th>
      <th class="borde_rb_cab borde_t_cab" colspan="2" ><xsl:copy-of select="$pasado" /></th>
      <th class="borde_rb_cab borde_t_cab" colspan="2" ><xsl:copy-of select="$ppasado" /></th>
      <th class="borde_rb_cab borde_t_cab" rowspan="2" ><xsl:copy-of select="$pppasado" /></th>
      <th class="borde_rb_cab borde_t_cab" rowspan="2" ><xsl:copy-of select="$ppppasado" /></th>
      <th class="borde_rb_cab borde_t_cab" rowspan="2" ><xsl:copy-of select="$pppppasado" /></th>
    </tr>
    <tr class="cabecera_niv2">
      <th class="borde_rb no_wrap">12-18</th>
      <th class="borde_rb no_wrap">18-24</th>
      <th class="borde_rb no_wrap">0-6</th>
      <th class="borde_rb no_wrap">6-12</th>
      <th class="borde_rb no_wrap">12-18</th>
      <th class="borde_rb no_wrap">18-24</th>
      <th class="borde_rb no_wrap">0-12</th>
      <th class="borde_rb no_wrap">12-24</th>
      <th class="borde_rb no_wrap">0-12</th>
      <th class="borde_rb no_wrap">12-24</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <th title="Estado del cielo" abbr="Cielo" class="borde_rlb_th_avisos">Estado del cielo</th>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=1]/estado_cielo[@periodo='12-18']}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=1]/estado_cielo[@periodo='18-24']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=2]/estado_cielo[@periodo='00-06']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=2]/estado_cielo[@periodo='06-12']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=2]/estado_cielo[@periodo='12-18']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=2]/estado_cielo[@periodo='18-24']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=3]/estado_cielo[@periodo='00-12']}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=3]/estado_cielo[@periodo='12-24']}.gif" title="Cielo despejado" alt="Cielo despejado" /></td>
      <td class="borde_b"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=4]/estado_cielo[@periodo='00-12']}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=4]/estado_cielo[@periodo='12-24']}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=5]/estado_cielo}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=6]/estado_cielo}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
      <td class="borde_rb"><img src="http://www.aemet.es/imagenes/gif/estado_cielo/{/root/prediccion/dia[position()=7]/estado_cielo}.gif" title="Intervalos nubosos" alt="Intervalos nubosos" /></td>
    </tr>
    <tr>
      <th title="Probabilidad de precipitación" abbr="Pro." class="borde_rlb_th_avisos">Prob. precip.</th>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=1]/prob_precipitacion[@periodo='12-18']" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=1]/prob_precipitacion[@periodo='18-24']" />%</td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/prob_precipitacion[@periodo='00-06']" />%</td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/prob_precipitacion[@periodo='06-12']" />%</td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/prob_precipitacion[@periodo='12-18']" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=2]/prob_precipitacion[@periodo='18-24']" />%</td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=3]/prob_precipitacion[@periodo='00-12']" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=3]/prob_precipitacion[@periodo='12-24']" />%</td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=4]/prob_precipitacion[@periodo='00-12']" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=4]/prob_precipitacion[@periodo='12-24']" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=5]/prob_precipitacion" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=6]/prob_precipitacion" />%</td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=7]/prob_precipitacion" />%</td>
    </tr>
    <tr >
      <th title="Cota de nieve a nivel de provincia" abbr="Cot." class="borde_rlb_th_avisos">Cota nieve prov.(m)</th>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=1]/cota_nieve_prov[@periodo='12-18']" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=1]/cota_nieve_prov[@periodo='18-24']" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/cota_nieve_prov[@periodo='00-06']" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/cota_nieve_prov[@periodo='06-12']" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/cota_nieve_prov[@periodo='12-18']" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=2]/cota_nieve_prov[@periodo='18-24']" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=3]/cota_nieve_prov[@periodo='00-12']" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=3]/cota_nieve_prov[@periodo='12-24']" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=4]/cota_nieve_prov[@periodo='00-12']" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=4]/cota_nieve_prov[@periodo='12-24']" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=5]/cota_nieve_prov" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=6]/cota_nieve_prov" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=7]/cota_nieve_prov" /></td>
    </tr>
    <tr>
      <th title="Temperatura mínima y máxima (&#176;C)" abbr="Max/Min." class="borde_rlb_th_avisos">Temp. mín./máx. (&#176;C)</th>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=1]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=1]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="4"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=2]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=2]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=3]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=3]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=4]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=4]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=5]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=5]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=6]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=6]/temperatura/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=7]/temperatura/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=7]/temperatura/maxima" /></span></td>
    </tr>
    <tr class="ocultar_filas_tabla">
      <th title="Sensación térmica mínima y máxima (&#176;C)" abbr="Sen. térm. mín./máx. (&#176;C)." class="borde_rlb_th_avisos">Sen. térm. mín./máx. (&#176;C)</th>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=1]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=1]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="4"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=2]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=2]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=3]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=3]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=4]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=4]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=5]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=5]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=6]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=6]/sens_termica/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_azul"><xsl:value-of select="/root/prediccion/dia[position()=7]/sens_termica/minima" /></span>/<span class="texto_rojo"><xsl:value-of select="/root/prediccion/dia[position()=7]/sens_termica/maxima" /></span></td>
    </tr>
    <tr class="ocultar_filas_tabla">
      <th title="Humedad relativa mínima y máxima (%)" abbr="Hum. rel. mín./máx. (%)." class="borde_rlb_th_avisos">Hum. rel. mín./máx. (%)</th>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=1]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=1]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="4"><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=2]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=2]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=3]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=3]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" colspan="2"><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=4]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=4]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=5]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=5]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=6]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=6]/humedad_relativa/maxima" /></span></td>
      <td class="borde_rb alinear_texto_centro" ><span class="texto_marron"><xsl:value-of select="/root/prediccion/dia[position()=7]/humedad_relativa/minima" /></span>/<span class="texto_verde"><xsl:value-of select="/root/prediccion/dia[position()=7]/humedad_relativa/maxima" /></span></td>
    </tr>
    <tr>
      <th title="Dirección del viento" abbr="Vie." class="borde_rlb_th_viento">Viento</th>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=1]/viento[@periodo='12-18']/direccion}.gif" title="Norte" alt="Norte" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=1]/viento[@periodo='18-24']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=2]/viento[@periodo='00-06']/direccion}.gif" title="Norte" alt="Norte" /></td>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=2]/viento[@periodo='06-12']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=2]/viento[@periodo='12-18']/direccion}.gif" title="Norte" alt="Norte" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=2]/viento[@periodo='18-24']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=3]/viento[@periodo='00-12']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=3]/viento[@periodo='12-24']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=4]/viento[@periodo='00-12']/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=4]/viento[@periodo='12-24']/direccion}.gif" title="Este" alt="Este" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=5]/viento/direccion}.gif" title="Este" alt="Este" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=6]/viento/direccion}.gif" title="Este" alt="Este" /></td>
      <td class="borde_r alinear_texto_centro"><img src="http://www.aemet.es/imagenes/gif/iconos_viento/{/root/prediccion/dia[position()=7]/viento/direccion}.gif" title="Nordeste" alt="Nordeste" /></td>
    </tr>
    <tr>
      <th title="Velocidad del viento en kilometros por hora" abbr="km/h." class="borde_rlb_th_avisos">(km/h)</th>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=1]/viento[@periodo='12-18']/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=1]/viento[@periodo='18-24']/velocidad" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/viento[@periodo='00-06']/velocidad" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/viento[@periodo='06-12']/velocidad" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=2]/viento[@periodo='12-18']/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=2]/viento[@periodo='18-24']/velocidad" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=3]/viento[@periodo='00-12']/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=3]/viento[@periodo='12-24']/velocidad" /></td>
      <td class="borde_b" ><xsl:value-of select="/root/prediccion/dia[position()=4]/viento[@periodo='00-12']/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=4]/viento[@periodo='12-24']/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=5]/viento/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=6]/viento/velocidad" /></td>
      <td class="borde_rb" ><xsl:value-of select="/root/prediccion/dia[position()=7]/viento/velocidad" /></td>
    </tr>
    <tr>
      <th title="Indice ultravioleta máximo" abbr="UV" class="borde_rlb_th_avisos">Indice UV máximo</th>
      <td class="borde_rb" colspan="2"><span class="raduv_pred_nivel3" title="índice ultravioleta alto"><xsl:value-of select="/root/prediccion/dia[position()=1]/uv_max" /></span></td>
      <td class="borde_rb" colspan="4"><span class="raduv_pred_nivel3" title="índice ultravioleta alto"><xsl:value-of select="/root/prediccion/dia[position()=2]/uv_max" /></span></td>
      <td class="borde_rb" colspan="2"><span class="raduv_pred_nivel3" title="índice ultravioleta alto"><xsl:value-of select="/root/prediccion/dia[position()=3]/uv_max" /></span></td>
      <td class="borde_rb" colspan="2"><span class="raduv_pred_nivel3" title="índice ultravioleta alto"><xsl:value-of select="/root/prediccion/dia[position()=4]/uv_max" /></span></td>
      <td class="borde_rb" colspan="1"><span class="raduv_pred_nivel2" title="índice ultravioleta moderado"><xsl:value-of select="/root/prediccion/dia[position()=5]/uv_max" /></span></td>
      <td class="borde_rb fondo_celda_azul_claro" colspan="1"></td>
      <td class="borde_rb fondo_celda_azul_claro" colspan="1"></td>
    </tr>
  </tbody>
</table>
</xsl:template>
</xsl:stylesheet>