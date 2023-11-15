
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
    <li>vamos adicionar as imagens</li>
    </a>
</ul>
<form method="post" action="{{ route('washing.image.store') }}" enctype="multipart/form-data">

    @csrf

    <input type="file" name="image">

    <input type="submit" value="cadastrar">
</form>

@endif

@if(isset($images) && count($images) > 0)

<img src="/img/washings/{{ $images->image }}">

@endif









