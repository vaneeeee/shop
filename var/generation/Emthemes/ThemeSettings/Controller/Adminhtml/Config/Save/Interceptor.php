<?php
namespace Emthemes\ThemeSettings\Controller\Adminhtml\Config\Save;

/**
 * Interceptor class for @see
 * \Emthemes\ThemeSettings\Controller\Adminhtml\Config\Save
 */
class Interceptor extends \Emthemes\ThemeSettings\Controller\Adminhtml\Config\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Emthemes\ThemeSettings\Model\Config\Structure $configStructure, \Emthemes\ThemeSettings\Model\ConfigFactory $configFactory, \Magento\Framework\Config\CacheInterface $cache, \Magento\Framework\Stdlib\StringUtils $string, \Emthemes\ThemeSettings\App\Config $themeConfig)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $configFactory, $cache, $string, $themeConfig);
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
