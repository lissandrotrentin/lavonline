<form action="{{ route('address.store') }}" method="POST">
            @csrf

            <div>
                <label for="rua"> rua </label>
                <input type="text" name="rua">
               
            </div>

            <div>
                <label for="bairro"> bairro </label>
                <input type="text" name="bairro">
               
            </div>

            <div>
                <label for="complemento" > complemento </label>
                <input type="text" name="complemento">
            </div>

            <div>
                <label for="numero" > numero </label>
                <input type="text" name="numero">
            </div>

            <div>
                <label for="cidade" > cidade </label>
                <input type="text" name="cidade">
            </div>

            <div>
                <label for="cep" > cep </label>
                <input type="text" name="cep">
            </div>

            <div>
                <label for="telefone" > telefone </label>
                <input type="text" name="telefone">
            </div>

            <div>
                <label for="cpf" > cpf </label>
                <input type="text" name="cpf">
            </div>

                <button>
                    cadastrar
                </button>
            </div>
        </form>