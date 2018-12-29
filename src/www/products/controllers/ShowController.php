<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 04:18 PM
 */

namespace www\products\controllers;


use repositories\ProductQueriesReository;

class ShowController
{
    /**
     * @var ProductQueriesReository
     */
    private $productQueriesReository;


    /**
     * ShowController constructor.
     * @param ProductQueriesReository $productQueriesReository
     */
    public function __construct(ProductQueriesReository $productQueriesReository)
    {
        $this->productQueriesReository = $productQueriesReository;
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

}