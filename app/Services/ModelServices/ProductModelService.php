<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 23:04
 */

namespace App\Services\ModelServices;




use App\Models\Models\ProductModel;

class ProductModelService
{

    private $model;

    /**
     * CategoryModelService constructor.
     * @param $model
     */
    public function __construct(ProductModel $model)
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
