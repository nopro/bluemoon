<?php
class NoPro_Bluemoon_Block_Bluemoon extends Mage_Core_Block_Template {
  
  public function isEnabled() {
    return Mage::helper('nopro_bluemoon')->isEnabled();
  }
  
  public function hasBlues() {
    return Mage::helper('nopro_bluemoon')->hasBlues();
  }
  
  /**
   * prepare block's layout
   *
   * @return NoPro_Bluemoon_Block_Bluemoon
   */
  public function _prepareLayout()
  {
    return parent::_prepareLayout();
  }
  
}
