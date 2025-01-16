<?php 

namespace App\Repositories\Producten;

interface ProductenRepositoryInterface 
{
    public function storeProduct(array $input);

    public function getProducts() : array;

    public function updateProduct(array $input);
}
