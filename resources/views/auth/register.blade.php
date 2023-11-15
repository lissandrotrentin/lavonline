
        <x-validation-errors />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">nome</label>
                <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <label for="email">email</label>
                <input type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <label for="password">senha</label>
                <input type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <label for="password_confirmation">confirmar senha</label>
                <input type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button>
                    {{ __('Register') }}
                </button>
            </div>
        </form>
   