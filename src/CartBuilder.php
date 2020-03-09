<?php

namespace Lib;

use Lib\Product\CalculateInterface;

class CartBuilder
{
    /**
     * @var array
     */
    private $cart = [];

    public function addProduct(CalculateInterface $product)
    {
        $this->cart[] = $product;
    }

    /**
     * @return CalculateInterface[]
     */
    public function getCart(): array
    {
        return $this->cart;
    }
}