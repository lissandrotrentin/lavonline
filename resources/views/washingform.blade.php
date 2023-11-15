<form action="{{ route('washing.store') }}" method="POST">
            @csrf

            
            <div>
                <label for="nome_fantasia"> nome fantasia </label>
                <input type="text" name="nome_fantasia">
               
            </div>

            <div>
                <label for="rua" > rua </label>
                <input type="text" name="rua">
            </div>

            <div>
                <label for="cep" > cep </label>
                <input type="text" name="cep">
            </div>

            <div>
                <label for="bairro" > bairro </label>
                <input type="text" name="bairro">
            </div>

            <div>
                <label for="numero" > numero </label>
                <input type="text" name="numero">
            </div>

            <div>
                <label for="cidade" > cidade </label>
                <input type="text" name="cidade">
            </div>

                <button>
                    cadastrar
                </button>
            </div>
        </form>