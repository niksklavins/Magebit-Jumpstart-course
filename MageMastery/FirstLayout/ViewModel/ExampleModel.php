<?php

namespace MageMastery\FirstLayout\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
class ExampleModel implements ArgumentInterface
{
    /**
     * @var array $data
     */
    private $data;

    /**
     * ExampleModel constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = ["one", "two", "three"]) {
        $this->data = $data;
    }
        /**
         * Get the example data.
         *
         * @return array
         */
    public function getExampleData(){
        return $this->data;
    }
}
