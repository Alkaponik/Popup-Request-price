<?php

class Magentotutorial_RequestPrice_Model_Resource_Price_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Resource initialization
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('requestprice/price');
    }
}