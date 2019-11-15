<?php

namespace Victor\Sample\Block\Adminhtml\Buttons;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveAndContinueButton
 * @package Victor\Sample\Block\Adminhtml\Buttons
 * @method GenericButton getBannerId()
 * @method GenericButton getUrl(string $route = '', array $params = [])
 */
class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get button data
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save and Continue'),
            'class' => 'save',
            'data_attribute' => [
                'mage-init' => [
                    'button' => [
                        'event' => 'saveAndContinueEdit'
                    ]
                ]
            ],
            'sort_order' => 80
        ];
    }
}
