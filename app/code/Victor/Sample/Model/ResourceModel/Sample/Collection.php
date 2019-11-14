<?php

namespace Victor\Sample\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Victor\Sample\Model\Sample;
use Victor\Sample\Model\ResourceModel\Sample as SampleResource;
/**
 * Class Collection
 * @package Victor\Sample\Model\ResourceModel\Sample
 */
class Collection extends AbstractCollection
{
    /**
     * Init Collection
     */
    protected function _construct()
    {
        $this->_init(Sample::class,SampleResource::class);
    }
}
