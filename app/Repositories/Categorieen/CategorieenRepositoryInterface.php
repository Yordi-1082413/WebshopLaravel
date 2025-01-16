<?php 

namespace App\Repositories\Categorieen;

interface CategorieenRepositoryInterface 
{
    public function storeCategorie(array $input);
    
     public function getCategorieen() : array;

     public function allCategorieen() : array;
}
