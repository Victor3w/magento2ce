<?php

namespace Victor\Sample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Victor\Sample\Model\ResourceModel\Sample\CollectionFactory;
/**
* Class Sample
 * @package Victor\Sample\ViewModel
 * @property CollectionFactory _sampleFactory
 */
class Sample implements ArgumentInterface
{
    /**@var CollectionFactory **/
    protected $_sampleFactory;

    /**
     * Sample constructor.
     * @param CollectionFactory $sampleFactory
     */
    public function __construct(CollectionFactory $sampleFactory)
    {
        $this->_sampleFactory = $sampleFactory;
    }

    /**
     * Get collection Sample
     * @return mixed
     */
    public function getCollection()
    {
        return $this->_sampleFactory->create();
    }
}
