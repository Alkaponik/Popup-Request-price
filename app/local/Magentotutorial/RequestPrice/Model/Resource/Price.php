<?php

class Magentotutorial_RequestPrice_Model_Resource_Price extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('requestprice/price', 'id');
    }
}