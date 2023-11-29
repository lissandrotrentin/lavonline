<?php

namespace App\Http\Controllers;

use App\Http\Requests\WashingOwnerStoreRequest;
use App\Models\Owner;
use App\Models\Service;
use App\Models\Washing;
use App\Models\WashingMore;
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
            'cep',
        );

        $requestImage = $request->file('image');

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $request->image->move(public_path('img/washings'), $imageName);

        $request_washing['image'] = $imageName;

        $id_user = session('id');

        $request_washing['owner_id'] = $id_user;

        $washing->create($request_washing);

        return redirect()->route('owner.dashboard');

    }

    public function serviceStore(Request $request, Service $service)
    {

        $dados['service'] = $request->service;

        $dados['washing_id'] = session('id');

        $service->create($dados);

        return redirect()->route('owner.dashboard');

    }

    public function washingInformation(int $id, Washing $washing, Service $services, WashingMore $more)
    {
        $washing = $washing->find($id);

        $services = $services->where('washing_id', $id)->get();

        $more = $more->where('washing_id', $id)->get(); 

        $id_washing = $id;

        //$ws = $washing->services; dd($ws); por algum motivo essa relacao ele acha quando chama

        //$ws = $washing->mores; essa tambem

        return view('washinginformation', compact('washing', 'services', 'more', 'id_washing'));

    }


}
