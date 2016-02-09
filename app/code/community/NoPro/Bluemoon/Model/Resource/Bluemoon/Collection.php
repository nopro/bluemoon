<?php

class NoPro_Bluemoon_Model_Resource_Bluemoon_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Define collection model
     */
    protected function __construct()
    {
        $this->_init('nopro_bluemoon/bluemoon');
    }
    
    /**
     * Prepare for displaying in list
     *
     * @param integer $page
     * @return NoPro_Bluemoon_Model_Resource_Bluemoon_Collection
     */

    /**
    public function prepareForList($page)
    {
        $this->setPageSize(Mage::helper('nopro_bluemoon')->getNewsPerPage());
        $this->setCurPage($page)->setOrder('published_at', Varien_Data_Collection::SORT_ORDER_DESC);
        return $this;
    }
    /**/
}