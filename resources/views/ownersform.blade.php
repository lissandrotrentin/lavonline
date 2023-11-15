

@error('error')
    <span>{{ $message }}</span>
@enderror

<form action="{{ route('owner.store') }}" method="POST">
            @csrf

            <div>
                <label for="cnpj"> cnpj </label>
                <input type="text" name="cnpj">
               
            </div>
            <div>
                <label for="razao_social" > razao social </label>
                <input type="text" name="razao_social">
            </div>

            <div>
                <label for="contato" > contato </label>
                <input type="text" name="contato">
            </div>

            <div>
                <label for="cpf_responsavel" > cpf responsavel </label>
                <input type="text" name="cpf_responsavel">
            </div>

            <div>
                <label for="nome_responsavel" > nome completo do responsavel </label>
                <input type="text" name="nome_responsavel">
            </div>

            <div>
                <label for="cidade" > cidade </label>
                <input type="text" name="cidade">
            </div>

            <div>
                <label for="data_nasc" > data nascimento </label>
                <input type="text" name="data_nasc">
            </div>

                <button>
                    cadastrar
                </button>
            </div>
        </form>