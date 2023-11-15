<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{


    public function addressform(){

        return view('addressform');
    }
   
    public function addressStore(UserAddress $address,AddressRequest $request)
    {
        $request = $request->validated();

        $user = auth()->user();

        $request['user_id'] = $user->id;

        $address->create($request);

    }

    
   
}
