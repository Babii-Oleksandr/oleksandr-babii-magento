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
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/jsonresponsedemo/?vendor_name=Oleksandrb&module_name=ControllerDemos">JsonResponseDemo</a><br>
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/redirectresponsedemo" target="_blank">RedirectResponseDemo</a><br>
                    <a href="/oleksandrb-controllers-demo/foobar_yetanotherfolder/forwardresponsedemo/?vendor_name=Oleksandrb&module_name=ControllerDemos">ForwardResponseDemo</a><br><br>
                    <form method="get" action="/oleksandrb-controllers-demo/foobar_yetanotherfolder/jsonresponsedemo">
                        <input type="text" name="vendor_name" value="Oleksandrb"><br><br>
                        <input type="text" name="module_name" value="ControllerDemos"><br><br>
                        <button type="submit">Отправить</button>
                    </form>
                </body>
        </html>

            <arguments>
                <argument name="text" translate="true" xsi:type="string"><![CDATA[DV.Campus!!!)) Text block demo]]></argument>
            </arguments>
        HTML
            );
    }
}

/**
 * Page result demo: https://oleksandr-babii-magento.local/oleksandrb-controllers-demo/foobar_yetanotherfolder/rawresponsedemo
 *
 * @return Raw
 */



