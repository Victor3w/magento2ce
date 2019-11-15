<?php


namespace Victor\Sample\Block\Adminhtml\Buttons;


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 * @package Victor\Sample\Block\Adminhtml\Buttons
 * @method GenericButton getBannerId()
 * @method GenericButton getUrl(string $route = '', array $params = [])
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get button data
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'button' => [
                        'event' => 'save'
                    ]
                ],
                'form-role' => 'save'
            ],
            'sort_order' => 90
        ];
    }
}
