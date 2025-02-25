<?php
namespace Custom\PrivacyNotification\Controller\Privacy;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\Controller\Result\JsonFactory;
use Custom\PrivacyNotification\Model\PrivacyConsent;

class Accept extends Action
{
    protected $customerSession;
    protected $jsonFactory;
    protected $privacyConsent;

    public function __construct(
        Context $context,
        Session $customerSession,
        JsonFactory $jsonFactory,
        PrivacyConsent $privacyConsent
    ) {
        parent::__construct($context);
        $this->customerSession = $customerSession;
        $this->jsonFactory = $jsonFactory;
        $this->privacyConsent = $privacyConsent;
    }

    public function execute()
    {
        // $customerId = $this->customerSession->getCustomerId();
        // if ($customerId) {
        //     $this->privacyConsent->acceptTerms($customerId);
        // }

        // return $this->jsonFactory->create()->setData(['success' => true]);
            $customerId = 1; // Substitua pelo ID do usuário autenticado
    $consent = $this->privacyConsent->getByCustomerId($customerId);

    if ($consent->getId()) {
        echo "O usuário já aceitou os termos.";
    } else {
        echo "O modal deveria aparecer!";
    }
    exit;
        }
}
