<?php

class NoPro_Bluemoon_Model_Observer
{
    /**
     * Event before show news item on frontend
     * If specified new post was added recently (term is defined in config) we'll see message about this on front-end.
     *
     * @param Varien_Event_Observer $observer
     */

  /**
    public function beforeNewsDisplayed(Varien_Event_Observer $observer)
    {
        $newsItem = $observer->getEvent()->getNewsItem();
        $currentDate = Mage::app()->getLocale()->date();
        $newsCreatedAt = Mage::app()->getLocale()->date(strtotime($newsItem->getCreatedAt()));
        $daysDifference = $currentDate->sub($newsCreatedAt)->getTimestamp() / (60 * 60 * 24);
        if ($daysDifference < Mage::helper('nopro_bluemoon')->getDaysDifference()) {
            Mage::getSingleton('core/session')->addSuccess(Mage::helper('nopro_bluemoon')->__('Recently added'));
        }
    }
  **/
}
