<?php

declare(strict_types=1);

namespace Oleksandrb\RegularCustomer\Block\Account;

use Magento\Customer\Block\Account\SortLinkInterface;

class SortTopLink extends \Magento\Framework\View\Element\Html\Link implements SortLinkInterface
{
    /**
     * @inheritdoc
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}
