<?php

declare(strict_types=1);

namespace Oleksandrb\ControllerDemos\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\Controller\Result\Json;

class JsonResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\App\RequestInterface $request;
    private \Magento\Framework\Controller\Result\JsonFactory $jsonFactory;
    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        $this->request = $request;
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Controller demo
     *
     * @return Json
     */
    public function execute(): Json
    {
        $params = $this->request->getParams();
        return $this->jsonFactory->create()
            ->setData($params);
    }
}
