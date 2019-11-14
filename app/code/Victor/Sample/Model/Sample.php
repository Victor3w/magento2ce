<?php

namespace Victor\Sample\Model;

use Magento\Framework\Model\AbstractModel;
use Victor\Sample\Model\ResourceModel\Sample as SampleResource;
/**
 * Class Simple
 * @package Victor\Sample\Model
 */
class Sample extends AbstractModel
{
    const TABLE_NAME = 'victor_sample';
    /**
     * Sample constructor.
     */
    protected function _construct()
    {
        $this->_init(SampleResource::class);
    }
}
