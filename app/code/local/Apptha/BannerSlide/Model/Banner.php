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
class Apptha_BannerSlide_Model_Banner extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bannerslide/bannerslide');
    }
    //Get Product Collection
	public function getProductCollection()
    {
      
       $strStoreId=Mage::app()->getStore()->getStoreId();
       $todayDate  = Mage::app()->getLocale()->date()->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);
       $model = Mage::getModel('catalog/product') ;//getting product model

       $collection = $model->getCollection();
       $collection->addAttributeToFilter('status', array('eq'=> 1))
       		      ->addAttributeToFilter('banner',array('neq'=>'no_selection'))
       		      ->addAttributeToSort('created_at', 'desc');
       return $collection;

    }
	
}