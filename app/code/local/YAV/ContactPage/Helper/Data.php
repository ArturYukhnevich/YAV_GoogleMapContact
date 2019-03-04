<?php

class YAV_ContactPage_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_CONFIG_FIELD_ONE = 'ContactPage/settings/addresses';

    /**
     * Returns un-serialized data of the custom config field one
     *
     * @return array
     */
    public function getConfigAddresses()
    {
        $config = Mage::getStoreConfig(self::XML_PATH_CONFIG_FIELD_ONE);

        if (!$config) {
            return array();
        }

        try {
            $config = array_values(unserialize($config));
        } catch (Exception $exception) {
            Mage::logException($exception);
            $config = array(); // Return an array if failed to un-serialize data
        }

        return $config;
    }

    public function getLocationsForFrontend()
    {
        $addresses = $this->getConfigAddresses();

        foreach ($addresses as &$address){
            unset($address['phone']);
//            $address[] = rand(1,10);
        }
        unset($address);

        $jsArray = array_map('array_values', $addresses);

        return json_encode($jsArray);
    }
}