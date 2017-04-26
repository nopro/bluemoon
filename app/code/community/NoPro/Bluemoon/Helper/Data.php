<?php

class NoPro_Bluemoon_Helper_Data extends Mage_Core_Helper_Data {

    public function isEnabled() {
        return Mage::getStoreConfig('nopro_bluemoon/general/enabled');
    }
  
    public function hasBlues() {
        return Mage::getStoreConfig('nopro_bluemoon/blues/enabled');
    }
  
    public function log($msg) {
        Mage::log($msg, null, 'bluemoon.log');
    }
  
    public function getPartnerId() {
        return Mage::getStoreConfig('nopro_bluemoon/general/partner_id');
    }
}