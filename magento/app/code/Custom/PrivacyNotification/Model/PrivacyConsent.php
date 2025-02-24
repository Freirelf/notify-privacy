<?php

namespace Custom\PrivacyNotification\Model;

use Magento\Framework\Model\AbstractModel;
use Custom\PrivacyNotification\Model\ResourceModel\PrivacyConsent as PrivacyConsentResource;

class PrivacyConsent extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PrivacyConsentResource::class);
    }
}
