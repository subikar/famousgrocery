<?php
/*------------------------------------------------------------------------
 # SM Zen - Version 1.0
 # Copyright (c) 2014 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Restaurant_Model_System_Config_Source_ListZoomImage
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'inner', 'label'=>Mage::helper('restaurant')->__('In')),
			array('value'=>'window', 'label'=>Mage::helper('restaurant')->__('Out')),
			array('value'=>'lens', 'label'=>Mage::helper('restaurant')->__('Lens'))
		);
	}
}
