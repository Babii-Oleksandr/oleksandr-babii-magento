<?php

declare(strict_types=1);

namespace Oleksandrb\ControllerDemos\Controller\FooBar\YetAnotherFolder;

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
     * Page result: https://oleksandr-babii-magento.local/oleksandrb-controllers-demo/foobar_yetanotherfolder/pageform
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
