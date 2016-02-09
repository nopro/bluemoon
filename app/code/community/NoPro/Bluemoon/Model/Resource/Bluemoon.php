<?php

class NoPro_Bluemoon_Model_Resource_Bluemoon extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize db and define main table and primary key
     */
    protected function __construct()
    {
        $this->_init('nopro_bluemoon/bluemoon', 'blue_id');
    }
}