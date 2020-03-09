<?php

namespace Lib;

class CartService
{

    public function calculate(CartBuilder $builder){
        $cost = 0;

        foreach ($builder->getCart() as $product){
            $cost += $product->getPrice() * $product->getQty();
        }

        return $cost;
    }
}