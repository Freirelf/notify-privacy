<?php

namespace Custom\PrivacyNotification\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PrivacyConsent extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('privacy_consent', 'entity_id'); 
    }
}
