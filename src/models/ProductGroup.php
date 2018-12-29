<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 03:58 PM
 */

namespace models;


class ProductGroup
{

    protected $fillable = [];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}