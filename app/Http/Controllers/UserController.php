<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\ImagesWashing;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\Washing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function userStoreForm()
    {
        return view('auth.userstore');
    }

    public function UserStore(Request $request, User $user)
    {

        $credentials = $request->only 
        (
            'name', 
            'email', 
            'password'
        );

        $newuser = $user->create($credentials);

        session(['id_user' => $newuser->id, 'user_name' => $newuser->name]);
        
        return redirect()->route('dashboard');

    }

    public function loginUserForm()
    {
        return view('auth.login_user');
    }

    public function loginUser(User $user, Request $request)
    {
        $request = $request->only(
            'email',
            'password'
        );
        
        $user = $user->where('email', $request['email'])
        ->where('password', $request['password'])->first();

        if($user)
        {
            session(['id_user' => $user->id, 'user_name' => $user->name]);

            return redirect()->route('dashboard');
            
        }   

            return redirect()->route('user.login.form')->withErrors(['error' => 'Email ou senha invalidos']);
    }

    public function logout(){

        session()->flush();

        return redirect()->route('welcome');


    }
    

    public function dashboard(Washing $washing, ImagesWashing $images, User $user){

        $user = $user->where('id', session('id_user'))->first();

        $address =  $user->address;

        $washings = $washing->all();

        return view('dashboard', compact('address', 'washings'));

    }

    public function addressform(){

        return view('addressform');
    }
   
    public function addressStore(UserAddress $address,AddressRequest $request)
    {
        $request = $request->validated();

        $user = auth()->user();

        $request['user_id'] = session('id_user');

        $address->create($request);

        return redirect()->route('dashboard');

    }


}
