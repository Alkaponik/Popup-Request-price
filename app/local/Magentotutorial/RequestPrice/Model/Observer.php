<?php

    class Magentotutorial_RequestPrice_Model_Observer
    {
        public function removePrice(Varien_Event_Observer $observer) {
        $layout = $observer->getLayout();
        $layout->getUpdate()->addUpdate('<remove name="catalog_product_price_template"/>');
        $layout->generateXml();
        }
    }