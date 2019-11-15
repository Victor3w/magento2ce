<?php

namespace Victor\Sample\Block\Adminhtml\Buttons;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class BackButton
 * @package Victor\Sample\Block\Adminhtml\Buttons
 * @method GenericButton getBannerId()
 * @method GenericButton getUrl(string $route = '', array $params = [])
 */
class BackButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get button data
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';",$this->getBackUrl()),
            'class' => 'back',
            'sort_order' => 10
        ];
    }

    /**
     * Get back url
     * @return string
     */
    public function getBackUrl(): string
    {
        return $this->getUrl('*/*/');
    }
}
