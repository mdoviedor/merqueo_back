<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 29/12/18
 * Time: 04:16 PM
 */

namespace repositories;


use models\Product;

class ProductRepository
{

    /**
     * @var Product
     */
    private $product;

    /**
     * ProductRepository constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @param Product $product
     */
    public function save(Product $product): void
    {
        $product->save();
    }

    /**
     * @param string $name
     * @param string $reference
     * @param float $price
     * @param float $cost
     * @param int $amount
     * @return Product
     */
    public function create(string $name, string $reference, float $price, float $cost, int $amount): Product
    {
        $product = new Product();

        $product->setNameAttribute($name)
            ->setReferenceAttribute($reference)
            ->setCostAttribute($cost)
            ->setAmountAttribute($amount)
            ->setPriceAttribute($price)
            ->setStateAttribute(Product::STATE_ACTIVE);

        $this->save($product);
        return $product;
    }

    /**
     * @param int $productId
     * @param bool $state
     * @return void
     */
    public function changeState(int $productId, bool $state): void
    {
        $this->product->where('id', $productId)
            ->update([
                'state' => $state
            ]);
    }

    /**
     * @param int $productId
     * @param int $amount
     */
    public function addItem(int $productId, int $amount): void
    {
        $product = $this->product->find($productId);

        if (!$product) {
            return;
        }

        $product->increment("amount", $amount);
    }

    /**
     * @param int $productId
     * @param int $amount
     */
    public function subItem(int $productId, int $amount): void
    {

        $product = $this->product->find($productId);

        if (!$product) {
            return;
        }

        $product->decrement("amount", $amount);

    }

}