<?php

namespace App\Http\Controllers;

use App\Models\ImagesWashing;
use App\Models\User as ModelsUser;
use App\Models\Washing;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function dashboard(Washing $washing, ImagesWashing $images){

        $user = auth()->user();

        $address =  $user->address;

        $washings = $washing->all();

        return view('dashboard', compact('address', 'washings'));

    }

}
