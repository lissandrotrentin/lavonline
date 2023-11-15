<?php

namespace App\Http\Controllers;

use App\Http\Requests\WashingOwnerStoreRequest;
use App\Models\ImagesWashing;
use App\Models\Owner;
use App\Models\Washing;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function ownersform()
    {
        return view('ownersform');
    }

    public function ownerslogin()
    {
        return view('ownerslogin');
    }

    public function ownerLoginStore(Request $request, Owner $owner)
    {
        $cnpj = $request->cnpj;

        $owner_session = $owner->where('cnpj', $cnpj)->first();

        session(['id' => $owner_session['id'], 'name' => $owner_session['nome_responsavel']]);

        return redirect()->route('owner.dashboard');

    }

    public function washingdashboard(Owner $owner, ImagesWashing $imagesWashing,Washing $washing)
    {
        $user = $owner->find(session('id'));
        
        $washing_verify = $user->washings; // apenas para o (if) para verificar se o usuario ja tem lavacao cadastrada 
      
     if(count($washing_verify) > 0){

        $washing_user = $washing->where('owner_id', session('id'))->first(); // trago pelo model os dados da lavacao caso ja possua uma

        $images = $imagesWashing->where('washing_id', $washing_user->id)->get();

        return view('dashboardwashing', compact('washing_verify','images', 'washing_user'));

    }
        
        return view('dashboardwashing', compact('washing_verify'));

        
    }

    public function ownerstore(Request $request,Owner $owner)
    {

        $request_owner = $request->only 
        (
            'cnpj', 
            'razao_social', 
            'cpf_responsavel', 
            'nome_responsavel', 
            'data_nasc',
            'contato',
            'cidade'
        );

        $newowner = $owner->create($request_owner);

        session(['id' => $newowner['id'], 'name' => $newowner['nome_responsavel']]);

        return redirect()->route('owner.dashboard');

    }

}
