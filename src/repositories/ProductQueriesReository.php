<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 04:23 PM
 */

namespace repositories;


use models\Product;

class ProductQueriesReository
{
    /**
     * @var Product
     */
    private $product;


    /**
     * ProductQueriesReository constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function findAll()
    {
        return $this->product->all();
    }

    /**
     * @return mixed
     */
    public function paginator()
    {
        return $this->product
            ->paginate();


    }

}