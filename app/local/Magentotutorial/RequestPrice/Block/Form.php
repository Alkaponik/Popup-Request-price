<?php

class Magentotutorial_RequestPrice_Block_Form extends Mage_Core_Block_Template
{

       // $productId = Mage::app()->getRequest()->getParam('id', false);
       // return Mage::getUrl('requestprice/index/post', array('id' => $productId));
    public function getActionOfForm()
    {
        //return $this->getUrl('requestprice/index/post');
        $productId = Mage::app()->getRequest()->getParam('id', false);
        return Mage::getUrl('requestprice/index/post', array('id' => $productId));
    }
    public function geTest()
    {
       echo "sfsdfsdfsd";
    }

}