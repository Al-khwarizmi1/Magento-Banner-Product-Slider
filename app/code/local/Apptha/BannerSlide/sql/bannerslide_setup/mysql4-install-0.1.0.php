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
$installer = $this;

$installer->startSetup();
 
$installer->addAttribute('catalog_product', 'banner', array(
    'group' => 'Images',
    'label' => 'Product Banner(Size: 940 X 380px)',
    'type' => 'varchar',
    'input' => 'media_image',
    'default' => '',
    'class' => '',
    'backend' => '',
    'frontend' => 'catalog/product_attribute_frontend_image',
    'source' => '',
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => true,
    'unique' => false,
));
 
$installer->updateAttribute('catalog_product', 'banner', 'is_global', Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE);
$installer->updateAttribute('catalog_product', 'banner', 'apply_to', 'simple,virtual,bundle,configurable,grouped,downloadable');

$installer->endSetup(); 