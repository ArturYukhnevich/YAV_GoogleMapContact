<?php

class YAV_ContactPage_Block_Adminhtml_AddressesField
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    /**
     * Add custom config field columns, set template, add values.
     */
    public function __construct()
    {
        /**
         * @var YAV_ContactPage_Helper_Data $contactPageHelper
         */
        $contactPageHelper = Mage::helper('ContactPage');

        $this->addColumn('address', [
            'style' => 'width:200px',
            'label' => $contactPageHelper->__('Address'),
        ]);

        $this->addColumn('latitude', [
            'style' => 'width:200px',
            'label' => $contactPageHelper->__('Latitude'),
        ]);

        $this->addColumn('longitude', [
            'style' => 'width:80px',
            'label' => $contactPageHelper->__('Longitude'),
        ]);

        $this->addColumn('phone', [
            'style' => 'width:80px',
            'label' => $contactPageHelper->__('Phone'),
        ]);

        parent::__construct();
    }
}