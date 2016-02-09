<?php
class NoPro_Bluemoon_IndexController extends Mage_Core_Controller_Front_Action {        

  /**/
  public function preDispatch() {
    parent::preDispatch();
    if (!Mage::helper('nopro_bluemoon')->isEnabled()) {
      $this->setFlag('', 'no-dispatch', true);
      $this->_redirect('noRoute');
    }
  }
  /**/
  
  public function indexAction() {
    $this->loadLayout();
    $this->renderLayout();    
  }

}
