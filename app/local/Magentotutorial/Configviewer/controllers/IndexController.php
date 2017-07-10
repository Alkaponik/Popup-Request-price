<?php

class Magentotutorial_Configviewer_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        //phpinfo();
        //echo 'Hello World';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction()
    {
        //echo 'Goodbye World!';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function paramsAction()
    {
        echo '
';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '
Param: ' . $key . '
';
            echo '
Value: ' . $value . '
';
        }
        echo '
';
    }

public function collectionAction()
    {
        echo 'Goodbye World!';
		$thing_1 = new Varien_Object();
		$thing_1->setName('Richard');
		$thing_1->setAge(24);

		$thing_2 = new Varien_Object();
		$thing_2->setName('Jane');
		$thing_2->setAge(12);

		$thing_3 = new Varien_Object();
		$thing_3->setName('Spot');
		$thing_3->setLastName('The Dog');
		$thing_3->setAge(7);
		
		var_dump ($thing_1->getName());
		var_dump($thing_3->getData());
		$collection_of_things = new Varien_Data_Collection();
$collection_of_things
    ->addItem($thing_1)
    ->addItem($thing_2)
    ->addItem($thing_3);
		foreach($collection_of_things as $thing)
{
    //var_dump($thing->getData());
}
var_dump($collection_of_things->getFirstItem()->getData());
var_dump($collection_of_things->getLastItem()->getData());

var_dump( $collection_of_things->toXml() );
var_dump($collection_of_things->getColumnValues('name'));
       
    }
	public function testAction()
{
    $collection_of_products = Mage::getModel('catalog/product')->getCollection();
    //var_dump($collection_of_products->getSelect());
	var_dump(
        (string) $collection_of_products->getSelect()
    );
}
	}