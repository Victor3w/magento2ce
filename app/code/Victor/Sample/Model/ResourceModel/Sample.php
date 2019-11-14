<?php

namespace Victor\Sample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Victor\Sample\Model\Sample as SampleModel;
/**
 * Class Sample
 * @package Victor\Sample\Model\ResourceModel
 */
class Sample extends AbstractDb
{
    /**
     * Sample constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }
    /**
     * Init Model
     */
    protected function _construct()
    {
        $this->_init(SampleModel::TABLE_NAME,'post_id');
    }
}
