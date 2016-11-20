<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actionLinks[0] = 'home';
      $actionNames[0] = ' Voltar ';
      $actionLinks[1] = 'users.create';
      $actionNames[1] = ' Incluir ';
      $users = \Atende\Models\User::paginate(4);
      //dd($users->toArray());
      return view('users.index')->with(compact('actionLinks', 'actionNames', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $actionLinks[0] = 'users.index';
      $actionNames[0] = ' Voltar ';
      $actionLinks[1] = 'users.store';
      $actionNames[1] = ' Salvar ';

      $name = null;
      $email = null;
      $password = null;
      $password_confirmation = null;
      return view('users.create')->with(compact('actionLinks', 'actionNames', 'name', 'email', 'password', 'password_confirmation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = \Request::except('_token');
        $user = new \Atende\Models\User();
        $user->name  = $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['name']);
        $user->save();

        return redirect()->route('users.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
