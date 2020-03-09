<?php

namespace Lib\Product;

abstract class AbstractProduct
{

    /**
     * @var string
     */
    protected const TITLE  = 'noname';

    /**
     * @var float
     */
    protected $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return static::TITLE;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}