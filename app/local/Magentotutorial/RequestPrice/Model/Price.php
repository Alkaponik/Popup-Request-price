<?php

class Magentotutorial_RequestPrice_Model_Price extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        parent::_construct();
        $this->_init('requestprice/price');
    }

}
