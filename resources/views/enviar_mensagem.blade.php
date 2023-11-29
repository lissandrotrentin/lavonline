<style>
    .text{
        width: 400px;
        font-size: 15px;
    }
</style>


<form method="post" action="">
<textarea name="message" rows="6" class="text">
hora de retirada:{{ $dados['hora_retirada'] }}

hora de entrega:{{ $dados['hora_entrega'] }}

dia marcado: {{ $dados['day'] }}

observacao: {{ $dados['observacao'] }}

servicos:
@foreach($services as $service)

{{ $service->service }}@endforeach


</textarea>
<br>
<input type="submit">
</form>