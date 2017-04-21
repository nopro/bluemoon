<?php

class NoPro_Bluemoon_Model_Bluemoon extends Mage_Core_Model_Abstract
{
    /**
     * Define resource model
     */
    public function __construct()
    {
        $this->_init('nopro_bluemoon/bluemoon');
    }

    /**
     * If object is new adds creation date
     *
     * @return NoPro_Bluemoon_Model_Bluemoon
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        if ($this->isObjectNew()) {
            $this->setData('created_at', Varien_Date::now());
        }
        return $this;
    }
}

