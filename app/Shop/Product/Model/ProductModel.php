<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:24
 */

namespace App\Shop\Product\Model;


use App\Models\Model;
use App\Shop\Product\Repository\PictureRepository;

class ProductModel extends Model
{


    protected $table = 'products';

    protected $fillable =[
            'id',
            'category_id',
            'name',
            'slug',
            'description',
            'cover',
            'quantity',
            'price',
            'status',
            'image'


    ];

    /**
     * ProductModel constructor.
     */


}
