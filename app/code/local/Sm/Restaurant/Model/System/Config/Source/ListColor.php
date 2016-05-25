<?php
/*------------------------------------------------------------------------
 # SM Zen - Version 1.0
 # Copyright (c) 2014 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Restaurant_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'red', 'label'=>Mage::helper('restaurant')->__('Red')),
        array('value'=>'brown', 'label'=>Mage::helper('restaurant')->__('Brown')),
		array('value'=>'green', 'label'=>Mage::helper('restaurant')->__('Green')),
        array('value'=>'yellow', 'label'=>Mage::helper('restaurant')->__('Yellow'))
        );
	}
}
