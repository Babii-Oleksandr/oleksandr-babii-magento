<?php

declare(strict_types=1);

namespace Oleksandrb\ControllerDemos\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\View\Result\Page;

class ResponseForm implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\View\Result\PageFactory $pageFactory;
    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Controller demo
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
