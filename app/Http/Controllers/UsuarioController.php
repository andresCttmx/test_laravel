<?php

namespace crud\Http\Controllers;

use Illuminate\Http\Request;
//use illuminate\Support\Farcades\Session;
//use illuminate\Support\Farcades\Redirect;
use crud\User; //referencia a el modelo USER
use Session;
use Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::All();
      return view('usuario.index',compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
          
        Session::flash('message','Usuario agregado correctamente');
        return Redirect::to('/usuario');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id); //usuario va aser igual a el usuario que se envie mediane el boton (a su ID)
        return view('usuario.edit',['user'=>$user]);//envia la vista de editar y recibe un parametro, el id del usuario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id); //buscar al usuario
        $user->fill($request->all());//fill label
        $user->save();
        Session::flash('message','Usuario Editado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { //ELIMINAR
        User::destroy($id);
        Session::flash('message','Usuario Eliminado correctamente');
        return Redirect::to('/usuario');
        
    }
}
