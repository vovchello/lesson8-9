<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 09.10.18
 * Time: 13:48
 */

namespace App\Shop\Product\Repository;


use App\Repositories\BaseRepository;
use App\Shop\Product\Model\PictureModel;

class PictureRepository extends BaseRepository
{
    protected $model;

    /**
     * PictureRepository constructor.
     * @param $model
     */
    public function __construct(PictureModel $model)
    {
        $this->model = $model;
    }


}
