<?php


use Lib\CartBuilder;
use Lib\CartService;
use Lib\Product\CartProduct;
use Lib\Product\Cinnamon;
use Lib\Product\Coffee;
use Lib\Product\Milk;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{

    /**
     * @var CartService
     */
    private $cart;

    public function setUp(): void
    {
        parent::setUp();
        $this->cart = new CartService();
    }

    public function testCart(){
        $builder = new CartBuilder();
        $builder->addProduct(new CartProduct(new Coffee(200),1));
        $builder->addProduct(new CartProduct(new Milk(50),1));
        $builder->addProduct(new CartProduct(new Cinnamon(10),5));

        $this->assertEquals($this->cart->calculate($builder),200*1+50*1+10*5);

    }
}