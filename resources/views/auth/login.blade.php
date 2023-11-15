
        <x-validation-errors/>

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email"> email </label>
                <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
               
            </div>


            <div>
                <label for="password" > senha </label>
                <input type="password" name="password" required autocomplete="current-password" />
            </div>

            <div>
                <label for="remember_me">
                    <input type="checkbox" name="remember" />
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button>
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    