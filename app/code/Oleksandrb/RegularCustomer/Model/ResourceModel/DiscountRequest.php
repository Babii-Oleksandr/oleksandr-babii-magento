<?php

declare(strict_types=1);

namespace Oleksandrb\RegularCustomer\Model\ResourceModel;

class DiscountRequest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        $this->_init('oleksandrb_regular_customer_request', 'request_id');
    }
}
