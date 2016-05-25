<?php
/*------------------------------------------------------------------------
 # SM Restaurant - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Restaurant_Model_System_Config_Source_ListCmspage
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'cmspage1', 'label'=>Mage::helper('restaurant')->__('Home Page Style 1')),
		array('value'=>'cmspage2', 'label'=>Mage::helper('restaurant')->__('Home Page Style 2')),
		array('value'=>'cmspage3', 'label'=>Mage::helper('restaurant')->__('Home Page Style 3')),
		array('value'=>'cmspage4', 'label'=>Mage::helper('restaurant')->__('Home Page Style 4'))
		);
	}
}
