<?php
/**
 * Este archivo contiene la presentacion.
 *
 * PHP versions 5
 *
 * @filesource
 * @copyright		Copyright 2007-2008, Pragmatia de RPB S.A.
 * @link			http://www.pragmatia.com
 * @package			pragtico
 * @subpackage		app.views
 * @since			Pragtico v 1.0.0
 * @version			$Revision: 248 $
 * @modifiedby		$LastChangedBy: mradosta $
 * @lastmodified	$Date: 2009-02-03 13:42:43 -0200 (mar 03 de feb de 2009) $
 * @author      	Martin Radosta <mradosta@pragmatia.com>
 */
 
/**
* Especifico los campos para ingresar las condiciones.
*/
$condiciones['Condicion.PreferenciasUsuario-usuario_id'] = array(	'lov'=>array('controller'	=>	'usuarios',
																			'camposRetorno'	=>array('Usuario.nombre',
																									'Usuario.nombre_completo')));

$condiciones['Condicion.PreferenciasUsuario-valor'] = array();
$condiciones['Condicion.Preferencia-nombre'] = array();
$fieldsets[] = array('campos' => $condiciones);
$fieldset = $appForm->pintarFieldsets($fieldsets, array('fieldset' => array('legend' => 'Preferencias de Usuario', 'imagen' => 'preferencias.gif')));


/**
* Creo el cuerpo de la tabla.
*/
$cuerpo = null;
foreach ($registros as $k => $v) {
	$fila = null;
	$id = $v['PreferenciasUsuario']['id'];
	//$fila[] = array('tipo' => 'desglose', 'id' => $id, 'imagen' => array('nombre' => 'usuarios.gif', 'alt' => 'Usuarios'), 'url' => 'usuarios');
	$fila[] = array('model' => 'PreferenciasUsuario', 'field' => 'id', 'valor' => $v['PreferenciasUsuario']['id'], 'write' => $v['PreferenciasUsuario']['write'], 'delete' => $v['PreferenciasUsuario']['delete']);
	$fila[] = array('model' => 'Usuario', 'field' => 'nombre', 'valor' => $v['Usuario']['nombre'], 'nombreEncabezado'=>'Usuario');
	$fila[] = array('model' => 'Preferencia', 'field' => 'nombre', 'valor' => $v['Preferencia']['nombre']);
	$fila[] = array('model' => 'PreferenciasValor', 'field' => 'valor', 'valor' => $v['PreferenciasValor']['valor']);
	$cuerpo[] = $fila;
}

echo $this->element('index/index', array('condiciones' => $fieldset, 'cuerpo' => $cuerpo));

?>