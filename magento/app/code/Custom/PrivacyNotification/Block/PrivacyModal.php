<?php

namespace Custom\PrivacyNotification\Block;

use Custom\PrivacyNotification\Model\PrivacyConsent;
use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

class PrivacyModal extends Template
{
    protected $customerSession;
    protected $privacyConsent;

    public function __construct(
        Template\Context $context,
        Session $customerSession,
        PrivacyConsent $privacyConsent,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->customerSession = $customerSession;
        $this->privacyConsent = $privacyConsent;
    }

    public function isLoggedIn()
    {
        return $this->customerSession->isLoggedIn();
    }

    public function getCustomerId()
    {
        return $this->customerSession->getCustomerId();
    }

    public function hasAcceptedPrivacyPolicy()
    {
        if (!$this->isLoggedIn()) {
            return false;
        }

        $customerId = $this->getCustomerId();
        $privacyConsent = $this->privacyConsent->getByCustomerId($customerId);

        return $privacyConsent !== null;
    }

    public function shouldShowModal()
    {
        return $this->isLoggedIn() && !$this->hasAcceptedPrivacyPolicy();
    }
}
