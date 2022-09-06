<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private ProductRepositoryInterface $_productRepository ;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->_productRepository = $productRepository;
    }


    public function products(){
        $products = $this->_productRepository->getAll();
        return view('admin.products.products')->with('products', $products);
    }

    public function getCreateProductView(){
        $product = new Product();
        return view('admin.products.edit-product')->with('product', $product);
    }

    public function createProduct(Request $request){
        dd($request->all());
        $this->_productRepository->createProduct($product);
        return redirect()->route('admin.products.products');
    }
}
