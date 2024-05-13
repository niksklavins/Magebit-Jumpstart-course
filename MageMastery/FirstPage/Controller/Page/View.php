<?php

declare(strict_types=1);

namespace MageMastery\FirstPage\Controller\Page;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class View implements ActionInterface
{
    /**
     * @var PageFactory
     */
    private JsonFactory $resultJsonFactory;

    /**
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct(JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
    }

    /**
     * @return Json
     */
    public function execute(): Json
    {
        $resultJson = $this->resultJsonFactory->create();

        return $resultJson->setData(['json_data' => 'come from json']);
    }
}
