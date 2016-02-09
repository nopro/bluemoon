<?php
class NoPro_Bluemoon_Adminhtml_BluemoonController extends Mage_Adminhtml_Controller_Action {

  protected function _initAction() {
    $this->loadLayout()
      ->_setActiveMenu('bluemoon')
      ;
    return $this;
  }

  public function indexAction() {
    $this
      ->_title($this->__('NoPro'))
      ->_title($this->__('Blue Moon'))
      ;
    $this->_initAction();
    $this->renderLayout();
      
  }
  
}
