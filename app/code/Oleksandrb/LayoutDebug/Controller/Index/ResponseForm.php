<?php

declare(strict_types=1);

namespace Oleksandrb\LayoutDebug\Controller\Index;

use Magento\Framework\View\Result\Page;

class ResponseForm implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\App\RequestInterface $request;
    private \Magento\Framework\View\Result\PageFactory $pageFactory;
    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->request = $request;
        $this->pageFactory = $pageFactory;
    }

    /**
     * Controller demo
     *
     * @return Page
     */
    public function execute(): Page
    {
        $params = $this->request->getParams();
        return $this->pageFactory->create();
    }
}
