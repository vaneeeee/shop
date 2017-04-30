<?php
namespace Emthemes\FilterProduct\Block\Product\ProductsList;

/**
 * Interceptor class for @see \Emthemes\FilterProduct\Block\Product\ProductsList
 */
class Interceptor extends \Emthemes\FilterProduct\Block\Product\ProductsList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Emthemes\FilterProduct\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Emthemes\FilterProduct\Model\ResourceModel\Bestsellers\CollectionFactory $bestSellerCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\App\Http\Context $httpContext, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Emthemes\FilterProduct\Model\Rule $rule, \Magento\Widget\Helper\Conditions $conditionsHelper, \Magento\Catalog\Helper\ImageFactory $imageHelperFactory, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Review\Model\ReviewFactory $reviewFactory, \Emthemes\FilterProduct\Block\ImageBuilderFactory $customImageBuilderFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $bestSellerCollectionFactory, $catalogProductVisibility, $httpContext, $sqlBuilder, $rule, $conditionsHelper, $imageHelperFactory, $urlHelper, $reviewFactory, $customImageBuilderFactory, $data);
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
