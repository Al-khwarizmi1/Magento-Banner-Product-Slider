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
class Apptha_BannerSlide_Block_Adminhtml_BannerSlide_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'bannerslide';
        $this->_controller = 'adminhtml_bannerslide';
        
        $this->_updateButton('save', 'label', Mage::helper('bannerslide')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('bannerslide')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('bannerslide_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'bannerslide_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'bannerslide_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('bannerslide_data') && Mage::registry('bannerslide_data')->getId() ) {
            return Mage::helper('bannerslide')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('bannerslide_data')->getTitle()));
        } else {
            return Mage::helper('bannerslide')->__('Add Item');
        }
    }
}