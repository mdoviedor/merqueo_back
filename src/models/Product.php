<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 03:53 PM
 */

namespace models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package models
 */
class Product extends Model
{

    const STATE_ACTIVE = true;
    const STATE_INACTIVE = false;

    protected $fillable = ['name', 'reference', 'price', 'cost', 'amount', 'state'];

    public function setStateAttribute(bool $state): Product
    {
        $this->attributes['state'] = $state;
        return $this;
    }

    public function setPriceAttribute(float $price): Product
    {
        $this->attributes['price'] = $price;
        return $this;
    }

    public function setCostAttribute(float $cost): Product
    {
        $this->attributes['cost'] = $cost;
        return $this;
    }

    public function setAmountAttribute(int $amount): Product
    {
        $this->attributes['amount'] = $amount;
        return $this;
    }


    public function setReferenceAttribute(string $reference): Product
    {
        $this->attributes['reference'] = $reference;
        return $this;
    }

    public function setNameAttribute(string $name): Product
    {
        $this->attributes['name'] = $name;
        return $this;
    }

    public function productGroup()
    {
        return $this->hasMany(ProductGroup::class);
    }

}