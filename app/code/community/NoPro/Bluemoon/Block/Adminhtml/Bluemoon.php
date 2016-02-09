<?php
/**
class NoPro_Bluemoon_Block_Adminhtml_Bluemoon extends Mage_Adminhtml_Block_Abstract {

  public function __construct() {
    
  }

}
/**/

class NoPro_Bluemoon_Block_Adminhtml_Bluemoon extends Mage_Adminhtml_Block_Catalog_Product_Grid {

  protected function _prepareCollection() {
    /**
	$store = $this->_getStore();
        $collection = Mage::getModel('catalog/product')->getCollection();
	
	if (Mage::helper('catalog')->isModuleEnabled('MDN_AdvancedStock')) {
            $collection->joinField('shelf_location',
                'cataloginventory/stock_item',
                'shelf_location',
                'product_id=entity_id',
                '{{table}}.stock_id=1',
                'left');
        }
	
        $this->setCollection($collection);
        $this->setDefaultSort('shelf_location');
    /**/
        parent::_prepareCollection();
        return $this;
  }
  
  protected function _prepareColumns() {
      
    if (Mage::helper('catalog')->isModuleEnabled('MDN_AdvancedStock')) {
      $this->addColumnAfter('shelf_location', array(
						    'header' => Mage::helper('catalog')->__('Location'),
						    //'width' => '100px',
						    //'align' =>  'left',
						    'index' => 'shelf_location',
						    // 'renderer' => 'MDN_AdvancedStock_Block_MassStockEditor_Widget_Grid_Column_Renderer_StockLocation',
						    ), 'status');
    }
    
    return parent::_prepareColumns();
  }

}