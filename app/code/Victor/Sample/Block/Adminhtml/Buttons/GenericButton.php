<?php


namespace Victor\Sample\Block\Adminhtml\Buttons;

use Magento\Backend\Block\Widget\Context;
use Magento\Tests\NamingConvention\true\string;

/**
 * Class GenericButton
 * @package Victor\Sample\Block\Adminhtml\Buttons
 * @property Context content
 */
abstract class GenericButton
{
    /**@var Context**/
    private $content;
    /**
     * GenericButton constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->content = $context;
    }

    /**
     * Get Banner id
     * @return mixed
     */
    public function getBannerId()
    {
        return $this->content->getRequest()->getParam('id');
    }

    /**
     * Get url
     * @param string $route
     * @param array $params
     * @return string
     */
    public function getUrl(string $route = '', array $params = [])
    {
        return $this->content->getUrlBuilder()->getUrl($route, $params);
    }
}
