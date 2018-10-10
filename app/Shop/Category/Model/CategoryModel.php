<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:24
 */

namespace App\Shop\Category\Model;


use App\Models\Model;

class CategoryModel extends Model
{


    protected $table = 'categories';

    protected $connection = "collection";

    public function getName()
    {
        return $this->getAttribute('name');
    }



}
