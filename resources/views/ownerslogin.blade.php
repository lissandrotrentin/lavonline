
@error('error')
    <span>{{ $message }}</span>
@enderror

<form action="{{ route('owner.login.store') }}" method="POST"> 
            @csrf

            <div>
                <label for="cnpj"> cnpj </label>
                <input type="text" name="cnpj">
               
            </div>

            <div>
                <input type="submit" name="" value="logar">
            </div>
</form>