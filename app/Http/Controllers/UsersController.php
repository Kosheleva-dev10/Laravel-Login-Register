<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request['email'],
            'password' => $request['password'],
            'address' => $request['address'],
            'address2' => $request['address2'],
            'city' => $request['city'],
            'state' => $request['state'],
            'zip' => $request['zip'],
        ]);
        
        if ($user) {
            return redirect('login');
        } else {
            return ('error');
        }
    }

    public function login(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();
        
        if (!$user) {
            return redirect('register');
            exit();
        }

        if (md5($request['password']) == $user->password) {
            return redirect('/dashboard');
            
        } else {
            return redirect('register');
        }
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
