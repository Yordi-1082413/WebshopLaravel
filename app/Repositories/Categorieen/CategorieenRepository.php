<?php

namespace App\Repositories\Categorieen;

use App\Models\CategorieModel;

class CategorieenRepository implements CategorieenRepositoryInterface
{
    public function storeCategorie(array $input)
    {
        // $categorie = new CategorieModel;

        // $categorie->naam = $input['name'];

        // $categorie->save();

        CategorieModel::updateOrCreate(
            [
                "naam" => $input["name"]
            ],
            [
                "naam" => $input["name"],
                "foto" => $input["foto"]
            ]
                 
        );
    }


    public function getCategorieen() : array
    {
     
      

        $categorieNaamFoto = array();

    
    
   $categorieen = CategorieModel::all();

        for($i =0; $i < count($categorieen); $i++) {
            $categorieNaamFoto[$i]['naam'] = $categorieen[$i]['naam'] ;
            $categorieNaamFoto[$i]["foto"] = $categorieen[$i]['foto'];
            $categorieNaamFoto[$i]["id"] = $categorieen[$i]['id'];
        //    $categorieNaamFoto["naam"] = $categorieen[$i]['naam'] ;
        //      $categorieNaamFoto["foto"] = $categorieen[$i]['foto'];
            

          
        }   

          return $categorieNaamFoto;
      
    }

public function allCategorieen() : array
{
    $categorieNamen = array();

    
    
    $categorieen = CategorieModel::all();
 
         for($i =0; $i < count($categorieen); $i++) {
             $categorieNamen[$i] = $categorieen[$i]['naam'] ;

         //    $categorieNaamFoto["naam"] = $categorieen[$i]['naam'] ;
         //      $categorieNaamFoto["foto"] = $categorieen[$i]['foto'];
             
 
           
         }   
 
           return $categorieNamen;

}
}

