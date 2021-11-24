<?php

declare(strict_types=1);

namespace Oleksandrb\RegularCustomer\Model\ResourceModel\DiscountRequest;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->_init(
            \Oleksandrb\RegularCustomer\Model\DiscountRequest::class,
            \Oleksandrb\RegularCustomer\Model\ResourceModel\DiscountRequest::class
        );
    }
}
