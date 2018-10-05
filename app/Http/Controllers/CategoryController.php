<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:25
 */

namespace App\Http\Controllers;


use App\Services\ModelServices\CategoryModelService;

class CategoryController extends Controller
{
    private $service;

    /**
     * CategoryController constructor.
     * @param $model
     */
    public function __construct(CategoryModelService $service)
    {
        $this->service = $service;
    }


    public function index(){
        $categories = $this->service->getAll();

        $category = $categories[0];

        return view('front.categories.category',compact('category','categories'));
    }



}
