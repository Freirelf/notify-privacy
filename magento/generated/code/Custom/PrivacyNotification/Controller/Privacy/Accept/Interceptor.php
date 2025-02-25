<?php
namespace Custom\PrivacyNotification\Controller\Privacy\Accept;

/**
 * Interceptor class for @see \Custom\PrivacyNotification\Controller\Privacy\Accept
 */
class Interceptor extends \Custom\PrivacyNotification\Controller\Privacy\Accept implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Custom\PrivacyNotification\Model\PrivacyConsent $privacyConsent)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $jsonFactory, $privacyConsent);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
