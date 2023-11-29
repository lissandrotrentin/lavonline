<h1>escolha a hora da sua lavacao</h1>



<form method="post" action="{{ route('agendamento.store') }}">
@csrf
<label>hora de retirada</label>
<br>
<input type="text" name="hora_retirada">
<br>
<label>hora de entrega</label>
<br>
<input type="text" name="hora_entrega">
<br>
<label>observacao</label>
<br>
<input type="text" name="observacao">

<input type="hidden" name="id_washing" value="{{ $id_washing }}">

<input type="hidden" name="day" value="{{ $day }}">
<br>
<input type="submit" value="proximo">
</form>