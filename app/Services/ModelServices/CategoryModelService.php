<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 23:04
 */

namespace App\Services\ModelServices;




use App\Models\Models\CategoryModel;

class CategoryModelService
{

    private $model;

    /**
     * CategoryModelService constructor.
     * @param $model
     */
    public function __construct(CategoryModel $model)
    {
        $this->model = $model;
    }

    public function getAll(){
        $model = $this->model;
        return $model->all();
    }

    public function findCategoryById($id){
        return $this->model->findOrFail($id);
    }





}
