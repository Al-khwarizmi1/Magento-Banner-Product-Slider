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
class Apptha_BannerSlide_Block_Adminhtml_BannerSlide_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('bannerslideGrid');
      $this->setDefaultSort('bannerslide_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
       $strStoreId=Mage::app()->getStore()->getStoreId();
       $todayDate  = Mage::app()->getLocale()->date()->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);
       $model = Mage::getModel('catalog/product') ;//getting product model

       $collection = $model->getCollection();
       $collection->addAttributeToSelect('name')
       			  ->addAttributeToFilter('status', array('eq'=> 1))
       		      ->addAttributeToFilter('banner',array('neq'=>'no_selection'))
       		      ->addAttributeToSort('created_at', 'desc');
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      /* $this->addColumn('bannerslide_id', array(
          'header'    => Mage::helper('bannerslide')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'entity_id',
      )); */

      $this->addColumn('name',
            array(
                'header'=> Mage::helper('catalog')->__('Product Name'),
                'index' => 'name',
        ));

	  /*
      $this->addColumn('content', array(
			'header'    => Mage::helper('bannerslide')->__('Item Content'),
			'width'     => '150px',
			'index'     => 'content',
      ));
	  */

      /*$this->addColumn('status', array(
          'header'    => Mage::helper('bannerslide')->__('Status'),
          'align'     => 'left',
          'width'     => '80px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      )); */
	  
        
		
		$this->addExportType('*/*/exportCsv', Mage::helper('bannerslide')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('bannerslide')->__('XML'));
	  
      return parent::_prepareColumns();
  }

 	// protected function _prepareMassaction()
   // {
     //   $this->setMassactionIdField('bannerslide_id');
     //   $this->getMassactionBlock()->setFormFieldName('bannerslide');

     //   $this->getMassactionBlock()->addItem('delete', array(
      //       'label'    => Mage::helper('bannerslide')->__('Delete'),
       //      'url'      => $this->getUrl('*/*/massDelete'),
      //       'confirm'  => Mage::helper('bannerslide')->__('Are you sure?')
      //  ));

      //  $statuses = Mage::getSingleton('bannerslide/status')->getOptionArray(); 

      //  array_unshift($statuses, array('label'=>'', 'value'=>''));
     //   $this->getMassactionBlock()->addItem('status', array(
      //       'label'=> Mage::helper('bannerslide')->__('Change status'),
      //       'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
       //      'additional' => array(
       //             'visibility' => array(
       //                  'name' => 'status',
        //                 'type' => 'select',
        //                 'class' => 'required-entry',
        //                 'label' => Mage::helper('bannerslide')->__('Status'),
         //                'values' => $statuses
        //             )
        //     )
      //  ));
      //  return $this;
   // } 

  public function getRowUrl()
  {
  	
  }

}