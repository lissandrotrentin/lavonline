
<h1>{{ $washing->nome_fantasia }}</h1>

<p>{{ $washing->rua}}, {{ $washing->numero}}, {{$washing->bairro}},{{ $washing->cidade }}</p>

<h1>servicos</h1>

@if(count($services) > 0)


<form method="post" action="{{ route('mark.service') }}">

<input type="hidden" value="{{ $id_washing }}" name="id_washing">

@foreach($services as $service)

    @csrf
    <input type="checkbox" value="{{ $service->service }}" name="{{ $service->service }}">{{ $service->service }}
    <br>

@endforeach

    <input type="submit" value="proximo">

</form>

<h1>avaliacoes</h1>

@endif