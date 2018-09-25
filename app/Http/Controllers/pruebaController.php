<?php

namespace crud\Http\Controllers;



class pruebaController extends Controller
{
   

    /**
     * Create a new controller instance.
     *
     * @return response
     */
    public function index()
    {
        return "Mensaje del controlador";
    }
    
     public function nombre($nombre)
    {
        return "mi nombre es: ".$nombre;
       
    }
    
}
