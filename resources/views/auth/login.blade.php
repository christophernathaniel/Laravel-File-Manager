<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <svg width="57" height="63" viewBox="0 0 57 63" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0655 3.28556H40.6247V27.2202C41.5033 26.4567 42.3141 25.7214 43.0496 25.0213V3.28556V0.860718H40.6247H12.0655H9.64062V3.28556V47.4133C10.4059 47.0758 11.2161 46.6972 12.0655 46.2801V3.28556ZM12.0655 47.9534C11.2211 48.3394 10.4112 48.6889 9.64062 49V60.1347V62.5595H12.0655H40.6247H43.0496V60.1347V27.0675C42.2981 27.779 41.488 28.5135 40.6247 29.2656V60.1347H12.0655V47.9534Z" fill="#0C0C0C"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3465 39.7256C30.7733 39.7256 34.362 36.1369 34.362 31.7101C34.362 27.2833 30.7733 23.6947 26.3465 23.6947C21.9197 23.6947 18.3311 27.2833 18.3311 31.7101C18.3311 35.1406 20.4861 38.0678 23.5163 39.2116C26.3462 37.641 28.395 36.217 29.3849 35.0938L31.472 34.4253C31.01 35.796 28.8936 37.645 25.5933 39.6907C25.8412 39.7138 26.0925 39.7256 26.3465 39.7256Z" fill="#0C0C0C"/>
            <circle cx="10.7872" cy="13.7798" r="2.95027" fill="#0C0C0C"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2589 37.059C41.4894 28.1491 50.8011 18.8269 49.0572 16.2374C47.3133 13.6479 35.1742 18.7717 21.9438 27.6816C8.71332 36.5916 -0.598387 45.9138 1.1455 48.5033C2.88938 51.0928 15.0285 45.969 28.2589 37.059ZM27.4776 35.6613C40.0491 27.1951 49.0925 18.6275 47.6766 16.525C46.2607 14.4225 34.9217 19.5813 22.3501 28.0475C9.77861 36.5137 0.735201 45.0814 2.15111 47.1838C3.56703 49.2863 14.9061 44.1275 27.4776 35.6613Z" fill="#0C0C0C"/>
            <path d="M27.5032 6.35452L28.2288 7.7575L29.7874 8.01404L28.6773 9.13767L28.9149 10.6992L27.5032 9.99067L26.0916 10.6992L26.3292 9.13767L25.2191 8.01404L26.7776 7.7575L27.5032 6.35452Z" fill="#0C0C0C"/>
            <path d="M50.4684 7.55536L50.8312 8.25685L51.6105 8.38512L51.0554 8.94693L51.1743 9.7277L50.4684 9.37343L49.7626 9.7277L49.8814 8.94693L49.3264 8.38512L50.1056 8.25685L50.4684 7.55536Z" fill="#0C0C0C"/>
            <path d="M55.318 29.3084L55.6808 30.0099L56.4601 30.1382L55.9051 30.7L56.0239 31.4808L55.318 31.1265L54.6122 31.4808L54.731 30.7L54.176 30.1382L54.9552 30.0099L55.318 29.3084Z" fill="#0C0C0C"/>
            <path d="M48.6668 41.7021L48.8482 42.0528L49.2379 42.117L48.9603 42.3979L49.0197 42.7883L48.6668 42.6111L48.3139 42.7883L48.3733 42.3979L48.0958 42.117L48.4854 42.0528L48.6668 41.7021Z" fill="#0C0C0C"/>
            <path d="M35.3162 11.1579L35.4976 11.5086L35.8873 11.5727L35.6098 11.8537L35.6692 12.244L35.3162 12.0669L34.9633 12.244L35.0227 11.8537L34.7452 11.5727L35.1348 11.5086L35.3162 11.1579Z" fill="#0C0C0C"/>
            <path d="M23.327 18.7477L23.5084 19.0985L23.898 19.1626L23.6205 19.4435L23.6799 19.8339L23.327 19.6568L22.9741 19.8339L23.0335 19.4435L22.7559 19.1626L23.1456 19.0985L23.327 18.7477Z" fill="#0C0C0C"/>
            <path d="M34.7167 40.5013L35.1867 41.41L36.1962 41.5762L35.4772 42.304L35.6311 43.3154L34.7167 42.8565L33.8024 43.3154L33.9563 42.304L33.2373 41.5762L34.2468 41.41L34.7167 40.5013Z" fill="#0C0C0C"/>
            <path d="M19.8867 53.0296L20.3567 53.9383L21.3661 54.1045L20.6471 54.8323L20.801 55.8437L19.8867 55.3848L18.9723 55.8437L19.1262 54.8323L18.4072 54.1045L19.4167 53.9383L19.8867 53.0296Z" fill="#0C0C0C"/>
            </svg>

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
