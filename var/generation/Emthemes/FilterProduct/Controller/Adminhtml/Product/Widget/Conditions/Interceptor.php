<?php
namespace Emthemes\FilterProduct\Controller\Adminhtml\Product\Widget\Conditions;

/**
 * Interceptor class for @see
 * \Emthemes\FilterProduct\Controller\Adminhtml\Product\Widget\Conditions
 */
class Interceptor extends \Emthemes\FilterProduct\Controller\Adminhtml\Product\Widget\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Emthemes\FilterProduct\Model\Rule $rule)
    {
        $this->___init();
        parent::__construct($context, $rule);
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
