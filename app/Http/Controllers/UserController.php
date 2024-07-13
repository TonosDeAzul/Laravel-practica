<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        // $usuario = User::create($request->all());
        $usuario = User::create([
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);

        return redirect()->route("usuario.edit", ["id" => $usuario->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where("id", $id)->first();
        // dd($user);
        return view("editarUsuario", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where("id", $id)->first();
        $user->name = $request->name;

        $user->save();
        return view("editarUsuario", compact("user"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
