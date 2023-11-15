<?php

namespace App\Http\Controllers;

use App\Http\Requests\WashingOwnerStoreRequest;
use App\Models\Owner;
use App\Models\Washing;
use Illuminate\Http\Request;

class WashingController extends Controller
{
    
    
    public function washingform()
    {
        return view('washingform');
    }

    public function washingstore(Request $request, Washing $washing)
    {

        $request_washing = $request->only
        (
            'nome_fantasia',
            'rua',
            'bairro',
            'numero',
            'cidade',
            'cep'
        );

        $id_user = session('id');

        $request_washing['owner_id'] = $id_user;

        $washing->create($request_washing);

        return redirect()->route('owner.dashboard');

    }

}
