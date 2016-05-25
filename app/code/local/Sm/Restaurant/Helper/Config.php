<?php

class Sm_Restaurant_Helper_Config extends Mage_Core_Helper_Abstract
{
	
	public function getConfig($name = null)
	{
		if (!$name) return null;

		return Mage::getStoreConfig($name, Mage::app()->getStore()->getId());
	}

	public function getGeneral($name)
	{
		return $this->getConfig('restaurant_cfg/general/' . $name);
	}
	
	public function getThemeLayout($name)
	{
		return $this->getConfig('restaurant_cfg/theme_layout/' . $name);
	}
	
	public function getDetailRestaurant($name)
	{
		return $this->getConfig('restaurant_cfg/detail_restaurant/' . $name);
	}
	
	public function getProductSetting($name)
	{
		return $this->getConfig('restaurant_cfg/product_setting/' . $name);
	}
	
	public function getAdvanced($name)
	{
		return $this->getConfig('restaurant_cfg/advanced/' . $name);
	}
	
	public function getSocialSetting($name)
	{
		return $this->getConfig('restaurant_cfg/social_setting/' . $name);
	}
	
	public function getRichSnippetsSetting($name)
	{
		return $this->getConfig('restaurant_cfg/rich_snippets_setting/' . $name);
	}
	
	public function getProductListing($name)
	{
		return $this->getConfig('restaurant_cfg/product_listing/' . $name);
	}
	
}