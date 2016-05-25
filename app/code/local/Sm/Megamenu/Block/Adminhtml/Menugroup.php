<?php
/*------------------------------------------------------------------------
 # SM Mega Menu - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Megamenu_Block_Adminhtml_Menugroup extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	public function __construct()	
	{
		$this->_addButton ( 'import_from_categories', array (
			'label' => Mage::helper ( 'megamenu' )->__ ( 'Import From Categories' ),
			//'onclick' => "location.href='" . $this->getUrl ( '*/*/importFromCategories' ) . "'",
			'onclick'   => "confirmSetLocation('Are you sure you want to do this?', '{$this->getUrl('*/*/importFromCategories' )}')",
			'class' => 'import_from_categories'
		) );
		
		$this->_controller = 'adminhtml_menugroup';
		$this->_blockGroup = 'megamenu';
		$this->_headerText = Mage::helper('megamenu')->__('Menu Manager');
		$this->_addButtonLabel = Mage::helper('megamenu')->__('Add Group');
		parent::__construct();
	}
}