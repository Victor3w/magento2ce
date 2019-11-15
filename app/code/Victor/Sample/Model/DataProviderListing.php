<?php

namespace Victor\Sample\Model;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Victor\Sample\Model\ResourceModel\Sample\CollectionFactory;

/**
 * Class DataProviderListing
 * @package Victor\Sample\Model
 * @property CollectionFactory collection
 */
class DataProviderListing extends AbstractDataProvider
{
    /**@var array* */
    private $loadedData;

    /**
     * DataProviderListing constructor.
     * @param $name
     * @param $primaryFieldName
     * @param $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct($name, $primaryFieldName, $requestFieldName, CollectionFactory $collectionFactory, array $meta = [], array $data = [])
    {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
}
