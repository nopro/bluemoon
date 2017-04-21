<?php

class NoPro_Bluemoon_Helper_Data extends Mage_Core_Helper_Data {

    public function isEnabled() {
        return Mage::getStoreConfig('nopro_bluemoon/view/enabled');
    }
  
    public function log($msg) {
        Mage::log($msg, null, 'bluemoon.log');
    }
  
    public function getPartnerId() {
        return Mage::getStoreConfig('nopro_bluemoon/view/partner_id');
    }
}