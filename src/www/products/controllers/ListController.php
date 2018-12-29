<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 04:17 PM
 */

namespace www\products\controllers;


use repositories\ProductQueriesReository;

/**
 * Class ListController
 * @package www\products\controllers
 */
class ListController
{

    /**
     * @var ProductQueriesReository
     */
    private $productQueriesReository;

    /**
     * ListController constructor.
     * @param ProductQueriesReository $productQueriesReository
     */
    public function __construct(ProductQueriesReository $productQueriesReository)
    {
        $this->productQueriesReository = $productQueriesReository;
    }

}