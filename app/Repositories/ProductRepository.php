<?php namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAll(){
        return Product::all();
    }

    public function getActive(){
        return Product::where('is_active', 1);
    }

    public function getProduct($id){
        return Product::findOrFail($id);
    }

    public function createProduct(Product $product)
    {
        return Product::create([$product]);
    }

    public function updateProduct(Product $product)
    {
        return Product::update([$product]);
    }

    public function deleteProduct($id)
    {
        return Product::where('id', $id)->delete();
    }

}
