<?php

namespace Custom\PrivacyNotification\Model\ResourceModel\PrivacyConsent;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\PrivacyNotification\Model\PrivacyConsent as Model;
use Custom\PrivacyNotification\Model\ResourceModel\PrivacyConsent as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
