<?php

namespace App\Repositories\Producten;

use App\Models\ProductModel;
use App\Models\CategorieModel;

class ProductenRepository implements ProductenRepositoryInterface
{
    
    public function storeProduct(array $input)
    {
       
      $categorieNaam = $input["categorie"];

      $categorieid = CategorieModel::where("naam", $categorieNaam)->value("id");

        ProductModel::updateOrCreate(
            [
                "naam" => $input["name"]
            ],
            [
                "categorie_id" => $categorieid,
                "naam" => $input["name"],
                "prijs" => $input["prijs"],
                "beschrijving" => $input["beschrijving"],
                "foto" => $input["foto"]
            ]
                 
        ); 
    }

    
    public function getProducts() : array
    {
     
      

        $allproducten = array();

    
    
   $producten = ProductModel::all();

        for($i =0; $i < count($producten); $i++) {
            $allproducten[$i]['id'] = $producten[$i]['id'] ;
            $allproducten[$i]['naam'] = $producten[$i]['naam'] ;
            $allproducten[$i]['foto'] = $producten[$i]['foto'] ;
            $allproducten[$i]['beschrijving'] = $producten[$i]['beschrijving'] ;
            $allproducten[$i]['prijs'] = $producten[$i]['prijs'] ;
            $allproducten[$i]['categorie_id'] = $producten[$i]['categorie_id'] ;
            
            

          
        }   

          return $allproducten;
      
    }
    
    public function updateProduct(array $input) 
    {
    
        $product = ProductModel::find($input['id']);

        $product->naam = $input['name'];
        $product->categorie_id = $input['categorie_id'];
        $product->prijs = $input['prijs'];
        $product->beschrijving = $input['beschrijving'];
        $product->foto = $input['foto'];

        $product->save();
    }

}

