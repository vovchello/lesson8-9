<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\ModelServices\CategoryModelService;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController extends Controller
{

    public $service;

    public function __construct(CategoryModelService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $cat1 = $this->service->findCategoryById(0);
        $cat2 = $this->service->findCategoryById(1);
/*
        $cat1 = [
            'id'            => 0,
            'name'          => 'Category 1',
            'slug'          => 'category-1',
            'description'   => 'Category 1 Description',
        ];

        $cat2 = [
            'id'            => 1,
            'name'          => 'Category 2',
            'slug'          => 'category-2',
            'description'   => 'Category 2 Description',
        ];*/

        return view('front.index', compact('cat1', 'cat2'));
    }
}
