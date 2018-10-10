<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:25
 */

namespace App\Http\Controllers;


use App\Services\ModelServices\ProductModelService;
use App\Shop\Category\Repository\CategoryRerpository;
use App\Shop\Product\Repository\ProductRepository;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    private $categoryRepository;

    /**
     * CategoryController constructor.
     * @param $model
     */
    public function __construct(ProductRepository $repository, CategoryRerpository $categoryRepository)
    {
        $this->productRepository = $repository;
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $products = $this->productRepository->all();

        $product = $products[1];

        $category = $this->categoryRepository->find($product->category_id);



        return view('front.products.product',compact('product','products','category'));
    }




}
