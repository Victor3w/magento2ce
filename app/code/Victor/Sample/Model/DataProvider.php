<?php


namespace Victor\Sample\Model;


use Magento\Ui\DataProvider\AbstractDataProvider;
use Victor\Sample\Model\ResourceModel\Sample\CollectionFactory;

/**
 * Class DataProvider
 * @package Victor\Sample\Model
 * @property array loadedData
 */
class DataProvider extends AbstractDataProvider
{
    /**@var array* */
    private $loadedData;

    /**
     * DataProvider constructor.
     * @param $name
     * @param $primaryFieldName
     * @param $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct($name, $primaryFieldName, $requestFieldName, CollectionFactory $collectionFactory, array $meta = [], array $data = [])
    {
        $this->loadedData = $collectionFactory;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     * @return array
     */
    public function getData(): array
    {
        if (!isset($this->loadedData)) {
            $this->loadedData = [];
            foreach ($this->collection as $item) {
                $this->loadedData[$item->getPostId()] = $item->getData();
            }
        }
        return $this->loadedData;
    }
}
