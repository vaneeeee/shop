<?php
namespace Emthemes\ThemeSettings\Controller\Export\Index;

/**
 * Interceptor class for @see \Emthemes\ThemeSettings\Controller\Export\Index
 */
class Interceptor extends \Emthemes\ThemeSettings\Controller\Export\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Cms\Model\ResourceModel\Page\Collection $pageCollection, \Magento\Cms\Model\ResourceModel\Block\Collection $blockCollection, \Magento\Cms\Model\Block $block, \Magento\Widget\Model\ResourceModel\Widget\Instance\Collection $widgetCollection, \Magento\Widget\Model\Widget\InstanceFactory $widgetFactory)
    {
        $this->___init();
        parent::__construct($context, $pageCollection, $blockCollection, $block, $widgetCollection, $widgetFactory);
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
