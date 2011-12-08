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
 * @version			$Revision: 236 $
 * @modifiedby		$LastChangedBy: mradosta $
 * @lastmodified	$Date: 2009-01-27 11:26:49 -0200 (mar 27 de ene de 2009) $
 * @author      	Martin Radosta <mradosta@pragmatia.com>
 */
 
/**
* Especifico los campos de ingreso de datos.
*/
$campos = null;
$campos['ConveniosCategoriasHistorico.id'] = array();
$campos['ConveniosCategoriasHistorico.convenios_categoria_id'] = array(
																"label"	=> "Categoria",
																"lov"=>array(
																	"controller"		=>	"convenios_categorias",
																	"seleccionMultiple"	=> 	0,
																	"camposRetorno"		=>	array(	"Convenio.nombre",
																									"ConveniosCategoria.nombre")));
$campos['ConveniosCategoriasHistorico.desde'] = array();
$campos['ConveniosCategoriasHistorico.hasta'] = array();
$campos['ConveniosCategoriasHistorico.costo'] = array("label"=>"Costo $");
$campos['ConveniosCategoriasHistorico.observacion'] = array();
$fieldsets[] = array('campos' => $campos);

$fieldset = $appForm->pintarFieldsets($fieldsets, array('div' => array('class' => 'unica'), 'fieldset' => array('legend' => "Historico de Categoria", 'imagen' => 'historicos.gif')));

/**
* Pinto el element add con todos los fieldsets que he definido.
*/
echo $this->element('add/add', array('fieldset' => $fieldset));
?>