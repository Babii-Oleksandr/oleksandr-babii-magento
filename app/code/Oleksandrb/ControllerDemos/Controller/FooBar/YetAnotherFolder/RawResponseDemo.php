<?php

declare(strict_types=1);

namespace Oleksandrb\ControllerDemos\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\Controller\Result\Raw;

class RawResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\RawFactory $rawFactory;
    /**
     * @param \Magento\Framework\Controller\Result\RawFactory $rawFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        $this->rawFactory = $rawFactory;
    }

    /**
     * Controller demo
     *
     * @return Raw
     */
    public function execute(): Raw
    {
        $result = $this->rawFactory->create();

        return $result->setHeader ('Content-Type' , 'text/html')
            ->setContents(
                <<<'HTML'
        <html xmlns="http://www.w3.org/1999/html">
            <head>
                <meta charset="UTF-8">
                <title>Module</title>
            </head>
                <body>
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/jsonresponsedemo">JsonResponseDemo</a><br>
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/redirectresponsedemo">RedirectResponseDemo</a><br>
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/forwardresponsedemo">ForwardResponseDemo</a><br><br>

                    <form method="get" action="/oleksandrb-controllers-demo/foobar_yetanotherfolder/jsonresponsedemo">
                        <input type="text" name="vendor_name"><br><br>
                        <input type="text" name="module_name"><br><br>
                        <button type="submit">Отправить</button>
                    </form>
                </body>
        </html>
        HTML
            );
    }
}

