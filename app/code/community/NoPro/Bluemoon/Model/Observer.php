<?php

class NoPro_Bluemoon_Model_Observer
{
    protected $helper;

    public function __construct()
    {
        $this->helper = Mage::helper('nopro_bluemoon');
    }

}
