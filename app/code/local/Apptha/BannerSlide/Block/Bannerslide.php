<?php
/**
 * @name         :  Apptha Banner Product Slider
 * @version      :  1.0
 * @since        :  Magento 1.4
 * @author       :  Apptha - http://www.apptha.com
 * @copyright    :  Copyright (C) 2011 Powered by Apptha
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  October 22 2011
 * 
 * */ 
class Apptha_BannerSlide_Block_Bannerslide extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
	protected function _construct()
    {
        parent::_construct();
    }
    
     public function getBannerSlide()     
     { 
        if (!$this->hasData('bannerslide')) {
            $this->setData('bannerslide', Mage::registry('bannerslide'));
        }
        return $this->getData('bannerslide');
        
    }
	//Get Product Collection
	public function getProductCollections()
	{
		$getProductCollection = Mage::getModel('bannerslide/banner')->getProductCollection();
		return $getProductCollection;
	}

}