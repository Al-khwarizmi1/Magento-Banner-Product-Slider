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
class Apptha_BannerSlide_Block_Adminhtml_BannerSlide extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_bannerslide';
    $this->_blockGroup = 'bannerslide';
    $this->_headerText = Mage::helper('bannerslide')->__('Banner Product');
    $this->_addButtonLabel = Mage::helper('bannerslide')->__('Add Item');
    parent::__construct();
    $this->_removeButton('add');
  }
}