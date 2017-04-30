<?php
namespace Emthemes\ThemeSettings\Controller\Adminhtml\Theme\Demo;

/**
 * Interceptor class for @see
 * \Emthemes\ThemeSettings\Controller\Adminhtml\Theme\Demo
 */
class Interceptor extends \Emthemes\ThemeSettings\Controller\Adminhtml\Theme\Demo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Emthemes\ThemeSettings\Model\Config\Structure $configStructure, \Emthemes\ThemeSettings\Model\Config $backendConfig, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $backendConfig, $resultPageFactory, $registry);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
