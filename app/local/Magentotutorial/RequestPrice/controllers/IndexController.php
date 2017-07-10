<?php
class Magentotutorial_RequestPrice_IndexController extends Mage_Core_Controller_Front_Action {
    public function FormAction() {
       // echo "Здесь будет форма!!!";
        $this->loadLayout();
        $this->renderLayout();
    }

    public function postAction()
    {
        $output = array();

        $output = array('total_price' => 10);

        echo json_encode($output);
        exit;
        $data = $this->getRequest()->getPost();
        $data['Created_At']= date("Y-m-d H:i:s");
        $data['Status']= "New";
       // print_r($data);

        $session = Mage::getSingleton('core/session'); //обратиться к сессии
        //var_dump($data);
        return($data);
        /*try {
            $collection = Mage::getModel('requestprice/price')->setData($data);
            $collection->save();

            $session->addSuccess($this->__('Your request has been accepted for admin.'));
        }
        catch (Exception $e) {
            $session->setFormData($data);
            $session->addError($this->__('Unable to post the request.'));
        }

        if ($redirectUrl = Mage::getSingleton('requestprice/session')->getRedirectUrl(true)) {
            $this->_redirectUrl($redirectUrl);
            return;
        }
        $this->_redirectReferer();*/

    }

}