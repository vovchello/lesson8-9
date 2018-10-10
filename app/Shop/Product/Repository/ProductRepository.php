<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 10:59
 */

namespace App\Shop\Product\Repository;


use App\Repositories\BaseRepository;
use App\Shop\Product\Model\ProductModel;

/**
 * Class ProductRepository
 * @package App\Shop\Product\Repository
 */
class ProductRepository extends BaseRepository
{

    /**
     * @var ProductModel
     */
    protected $model;

    /**
     * @var PictureRepository
     */
    protected $picture;
    /**
     * ProductRepository constructor.
     * @param $model, $image
     */
    public function __construct(ProductModel $model, PictureRepository $picture)
    {
        $this->model = $model;


        $this->picture = $picture;



    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = ['*'], string $orderBy = 'id', string $sortBy = 'asc')
    {

       $model = $this->model->orderBy($orderBy, $sortBy)->get($columns);

       $this->getAllImages($model);

       return $model;
    }


    /**
     * @return mixed
     */
    public function getAllImages ($models){
        $image = $this->picture->all();

        foreach ($models as $model){
            $atributes = $model->getAttributes();
            $atributes ['image'] = $image[$atributes['id']]->src;
            $model->fill($atributes);
        }

    }

    private function rules (){
        return [
            'id'=> 'required|unique:posts|max:255',
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
    }

}
