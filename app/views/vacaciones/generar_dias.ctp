<?php
/**
 * Este archivo contiene la presentacion.
 *
 * PHP versions 5
 *
 * @filesource
 * @copyright       Copyright 2007-2008, Pragmatia de RPB S.A.
 * @link            http://www.pragmatia.com
 * @package         pragtico
 * @subpackage      app.views
 * @since           Pragtico v 1.0.0
 * @version         $Revision: 528 $
 * @modifiedby      $LastChangedBy: mradosta $
 * @lastmodified    $Date: 2009-05-20 16:56:44 -0300 (Wed, 20 May 2009) $
 * @author          Martin Radosta <mradosta@pragmatia.com>
 */

$conditions['Condicion.Bar-periodo_largo'] = array('label' => 'Periodo', 'type' => 'periodo', 'periodo' => array('A'));

$conditions['Condicion.Bar-empleador_id'] = array( 'lov' => array(
        'controller'        => 'empleadores',
        'seleccionMultiple' => true,
        'camposRetorno'     => array('Empleador.cuit', 'Empleador.nombre')));

$options = array('title' => 'Generar dias de Vacaciones', 'conditions' => array('Bar-file_format' => false));
echo $this->element('reports/conditions', array('aditionalConditions' => $conditions, 'options' => $options));
 
?>