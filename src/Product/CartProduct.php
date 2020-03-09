<?php

namespace Lib\Product;

class CartProduct implements CalculateInterface
{

    /**
     * @var AbstractProduct
     */
    private $product;
    /**
     * @var float
     */
    private $qty;

    public function __construct(AbstractProduct $product, float $qty)
    {
        $this->product = $product;
        $this->qty = $qty;
    }

    public function getPrice(): float
    {
        return $this->product->getPrice();
    }

    public function getQty(): float
    {
        return $this->qty;
    }
}