<?php
/*------------------------------------------------------------------------
 # SM Restaurant - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Restaurant_Model_System_Config_Source_ListFooter
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'ft1', 'label'=>Mage::helper('restaurant')->__('Footer 1')),
		array('value'=>'ft2', 'label'=>Mage::helper('restaurant')->__('Footer 2'))
		);
	}
}
