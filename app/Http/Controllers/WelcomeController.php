<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Categorieen\CategorieenRepositoryInterface;

class WelcomeController extends Controller
{
    private $categorieen;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategorieenRepositoryInterface $categorieen)
    {
        $this->middleware('auth');
        $this->categorieen = $categorieen;
    }

    

    public function index()
    {
        $categorieen = $this->categorieen->getCategorieen();

        return view('welcome', ['categorieen'=>$categorieen]);
    }


  public function contactcon()
  {
    return view('contactus'); 
  }
  

    
    
}
