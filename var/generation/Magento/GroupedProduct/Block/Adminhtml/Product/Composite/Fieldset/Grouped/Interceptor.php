<?php
namespace Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped;

/**
 * Interceptor class for @see
 * \Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped
 */
class Interceptor extends \Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Pricing\Helper\Data $pricingHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $pricingHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
