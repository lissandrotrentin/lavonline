<?php

namespace App\Http\Controllers;

use App\Models\MarkWashing;
use App\Models\ServiceMark;
use Illuminate\Http\Request;

class MarkWashingController extends Controller
{
    
    public function markService(Request $request, ServiceMark $serviceStore)
    {
        $id_washing = $request->only('id_washing');

        $services = $request->except('_token', 'id_washing');

        foreach ($services as $valor) {

            $serviceStore->create(['service' => $valor, 'id_user' => session('id_user')]);

        }

        return view('calendar', $id_washing);

    }

    public function markDay(Request $request)
    {

        $request = $request->except('_token');

        return view('agendarhora', $request);

    }

    public function storeAgendamento(Request $request, ServiceMark $services, MarkWashing $mark)
    {

        $dados = $request->except('_token');
        
        $mark->create([
            'dia' => $dados['day'],
            'horario_retirada' => $dados['hora_retirada'],
            'horario_entrega' => $dados['hora_entrega'],
            'observacao' => $dados['observacao'],
            'id_washing' => $dados['id_washing'],
            'user_id' => session('id_user')]);

        $form_message = route('message.form', ['dados' => $dados]);

        return redirect($form_message);

    }

    public function formMessage(Request $request, ServiceMark $services)
    {
        $dados = $request->all();

        $services = $services->where('id_user', session('id_user'))->get();

        return view('enviar_mensagem', $dados, compact('services'));

    }

    public function sendMessage()
    {

    }

}
