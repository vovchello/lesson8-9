<?php

namespace App\Interfaces;


interface BaseRepositoryInterface
{
    public function create(array $attributes);

    public function update(array $attributes) : bool;

    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');

    public function find($id);

    public function findOneOrFail($id);

    public function findBy($key, $operator = null, $value = null);

    public function findOneBy(array $data);

    public function findOneByOrFail(array $data);

    public function delete() : bool;

    public function paginateArrayResults(array $data, int $perPage = 50);

//    public function processItemTransformer(
//        Model $model,
//        TransformerAbstract $transformer,
//        string $resourceKey,
//        string $includes = null
//    ) : Scope;
//
//    public function processCollectionTransformer(
//        Collection $collection,
//        TransformerAbstract $transformer,
//        string $resourceKey,
//        string $includes = null,
//        $perPage = 25
//    ) : Scope;
}