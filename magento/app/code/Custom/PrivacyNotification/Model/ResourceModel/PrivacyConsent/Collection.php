<?php

namespace Custom\PrivacyNotification\Model\ResourceModel\PrivacyConsent;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\PrivacyNotification\Model\PrivacyConsent as PrivacyConsentModel;
use Custom\PrivacyNotification\Model\ResourceModel\PrivacyConsent as PrivacyConsentResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PrivacyConsentModel::class, PrivacyConsentResource::class);
    }
}
