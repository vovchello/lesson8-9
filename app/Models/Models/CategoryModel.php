<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:24
 */

namespace App\Models\Models;


use App\Models\Model;

class CategoryModel extends Model
{


    protected $table = 'categories';

    public function getName()
    {
        return $this->getAttribute('name');
    }

}
