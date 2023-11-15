

@if (count($address) > 0)
@else
<ul>
    <a href=" {{ route('address.form') }} ">
    <li>cadastre um enedereco para comecar</li>
    </a>
</ul>
@endif


<form action="" method="post">

    <input type="text" name="pesquisa" placeholder="pesquisar">

    <input type="submit" value="pesquisar">
</form>

@foreach($washings as $washing)
<div>
<table>
    <tr>
        <th>nome</th>
        <th>cidade</th>
        <th>rua</th>
    </tr>
    <tr>
        <td>{{ $washing->nome_fantasia }}</td>
        <td>{{ $washing->cidade }}</td>
        <td>{{ $washing->rua }}</td>
    </tr>
</table>
</div>
@endforeach