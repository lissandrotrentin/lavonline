
ola lavacao {{ session('name') }} {{ session('id') }}


@if( count($washing_verify) > 0)
@else
<ul>
    <a href="{{ route('washing.form') }}">
    <li>cadastre a sua lavacao</li>
    </a>
</ul>
@endif


@if( count($washing_verify) > 0)
<ul>
    <li>agora vamos cadastrar os servicos</li>
    </a>
</ul>

<form method="post" action="{{ route('service.store') }}">

    @csrf

    <input type="text" name="service">

    <input type="submit" value="cadastrar">
</form>


<img src="/img/washings/{{ $washing->image }}">

@endif









