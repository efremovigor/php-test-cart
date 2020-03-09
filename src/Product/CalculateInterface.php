<?php

namespace Lib\Product;

interface CalculateInterface
{
    public function getPrice(): float;

    public function getQty(): float;
}