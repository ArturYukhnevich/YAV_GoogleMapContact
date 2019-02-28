<?php

class YAV_ContactPage_Model_Source_Status
{
    const ENABLED = '1';
    const DISABLED = '0';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::ENABLED, 'label' => Mage::helper('ContactPage')->__('Enabled')],
            ['value' => self::DISABLED, 'label' => Mage::helper('ContactPage')->__('Disabled')],
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::DISABLED => Mage::helper('ContactPage')->__('Disabled'),
            self::ENABLED  => Mage::helper('ContactPage')->__('Enabled'),
        ];
    }
}