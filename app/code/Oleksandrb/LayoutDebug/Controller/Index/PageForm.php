<?php

declare(strict_types=1);

namespace Oleksandrb\LayoutDebug\Controller\Index;

use Magento\Framework\View\Result\Page;

class PageForm implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Page result demo: https://oleksandr-babii-magento.local/oleksandrb-layout-debug/index/pageform
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
