<?php 
namespace Trueque\Http\Controllers;


use Trueque\User;
use Trueque\Http\Controllers\Controller;



class PruebaController extends Controller
{

	/**
     *
     *@return Response
     *
	*/
	
  public function showProfile($id)
    {
        return "se resivio: " . $id;
    }
     public function index()
    {
        return "Hola desde ontroller";
    }
}