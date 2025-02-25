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

    public function getByCustomerId($customerId)
    {
        return $this->getCollection()
            ->addFieldToFilter('customer_id', $customerId)
            ->getFirstItem();
    }

    public function acceptTerms($customerId)
    {
        $consent = $this->getByCustomerId($customerId);
        if (!$consent->getId()) {
            $this->setData([
                'customer_id' => $customerId,
                'consent_status' => 1,
                'created_at' => (new \DateTime())->format('Y-m-d H:i:s')
            ])->save();
        }
    }
}
