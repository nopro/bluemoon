<?php
/**
class NoPro_Bluemoon_Block_Adminhtml_Bluemoon extends Mage_Adminhtml_Block_Abstract {

  public function __construct() {
    parent::__construct();
  }

}
/**/

class NoPro_Bluemoon_Block_Adminhtml_Bluemoon extends Mage_Adminhtml_Block_Sales_Order_Grid {

    protected function _prepareCollection() {
        parent::_prepareCollection();
        return $this;
    }


    /**
     * allow select_all in orders grid
     *
     * @param integer $page
     * @return NoPro_Bluemoon_Model_Resource_Bluemoon_Collection
     */
    protected function _prepareMassAction()
    {
	parent::_prepareMassAction();
	$this->getMassActionBlock()->setUseSelectAll(true);
	return $this;
    }
  
    protected function _prepareColumns() {
    return parent::_prepareColumns();
  }

}