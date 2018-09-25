<?php

namespace crud\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index()
   { //http://127.0.0.1:8000/movie
       return "estoy en el index";
   }
    
    public function create()
    {//http://127.0.0.1:8000/movie/create
      return "esto seria el formulario para crear"; 
    } 
    
    public function store()
    {
       
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        
    }
    
    public function update($id)
    {
    
    }
    
    public function destroy($id)
    {
        
    }
}
