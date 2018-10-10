<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:25
 */

namespace App\Http\Controllers;


use App\Shop\Category\Repository\CategoryRerpository;
use App\Shop\Product\Repository\ProductRepository;

class CategoryController extends Controller
{
    private $categoryRepository;


    private $productRepository;

    public function __construct(CategoryRerpository $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;

        $this->productRepository = $productRepository;
    }


    public function index(){


        $categories = $this->categoryRepository->all();

        $category = $this->categoryRepository->find(1);

        $products = $this->productRepository->all();



        return view('front.categories.category',compact('category','categories','products'));
    }



}
