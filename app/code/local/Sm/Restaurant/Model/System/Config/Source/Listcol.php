<?php
/*------------------------------------------------------------------------
 # SM Restaurant - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Restaurant_Model_System_Config_Source_ListCol
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'0', 'label'=>Mage::helper('restaurant')->__('0')),
		array('value'=>'1', 'label'=>Mage::helper('restaurant')->__('1')),
		array('value'=>'2', 'label'=>Mage::helper('restaurant')->__('2')),
		array('value'=>'3', 'label'=>Mage::helper('restaurant')->__('3')),
		array('value'=>'4', 'label'=>Mage::helper('restaurant')->__('4')),
		array('value'=>'5', 'label'=>Mage::helper('restaurant')->__('5')),
		array('value'=>'6', 'label'=>Mage::helper('restaurant')->__('6')),
		array('value'=>'7', 'label'=>Mage::helper('restaurant')->__('7')),
		array('value'=>'8', 'label'=>Mage::helper('restaurant')->__('8')),
		array('value'=>'9', 'label'=>Mage::helper('restaurant')->__('9')),
		array('value'=>'10', 'label'=>Mage::helper('restaurant')->__('10')),
		array('value'=>'11', 'label'=>Mage::helper('restaurant')->__('11')),
		array('value'=>'12', 'label'=>Mage::helper('restaurant')->__('12'))	
		);
	}
}
