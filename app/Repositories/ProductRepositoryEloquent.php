<?php
namespace App\Repositories;
use App\Contracts\ProductRepository;
use App\Models\Product;
use App\Repositories\AbstractRepositoryEloquent;

class ProductRepositoryEloquent extends AbstractRepositoryEloquent implements ProductRepository
{
    public function model()
    {
        return new Product;//khai báo tên bảng
    }

}