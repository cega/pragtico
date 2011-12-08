<?php
/**
 * Este archivo contiene toda la logica de acceso a datos asociada a los detalles de los descuentos.
 *
 * PHP versions 5
 *
 * @filesource
 * @copyright       Copyright 2007-2009, Pragmatia
 * @link            http://www.pragmatia.com
 * @package         pragtico
 * @subpackage      app.models
 * @since           Pragtico v 1.0.0
 * @version         $Revision: 811 $
 * @modifiedby      $LastChangedBy: mradosta $
 * @lastmodified    $Date: 2009-07-31 15:56:04 -0300 (vie 31 de jul de 2009) $
 * @author          Martin Radosta <mradosta@pragmatia.com>
 */
/**
 * La clase encapsula la logica de acceso a datos asociada a los detalles de los descuentos.
 *
 * @package     pragtico
 * @subpackage  app.models
 */
class DescuentosDetalle extends AppModel {
	
    var $permissions = array('permissions' => 496, 'group' => 'default', 'role' => 'all');
    
	var $belongsTo = array('Descuento');
	
}
?>