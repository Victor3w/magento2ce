<?php

namespace Victor\Sample\Block;

use Magento\Framework\View\Element\BlockInterface;
use Magento\Framework\View\Element\Template;
use Victor\Sample\Model\SampleFactory;

/**
 * Class Sample
 * @package Victor\Sample\Block
 * @property SampleFactory postFactory
 * @property string post
 */
class Sample extends Template implements BlockInterface
{
    /**@var SampleFactory* */
    private $postFactory;
    /**@var string* */
    private $post;

    /**
     * Sample constructor.
     * @param Template\Context $context
     * @param SampleFactory $postFactory
     * @param array $data
     */
    public function __construct(Template\Context $context, SampleFactory $postFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->postFactory = $postFactory;
    }

    /**
     * Get model Sample
     * @return mixed
     */
    public function getSample()
    {
        $sample = $this->postFactory->create();
        $id = $this->getRequest()->getParam('id') ?? null;
        $this->post = $sample->load($id);
        return $sample;
    }
}
