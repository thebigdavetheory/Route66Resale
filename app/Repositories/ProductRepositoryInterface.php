<?php namespace App\Repositories;

use App\Models\Product;

interface ProductRepositoryInterface{

    public function getAll();
    public function getActive();
    public function getProduct($id);
    public function createProduct(Product $product);
    public function updateProduct(Product $product);
    public function deleteProduct($id);

    // more
}
