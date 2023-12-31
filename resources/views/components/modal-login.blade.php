<!-- Button trigger modal -->
<div class="">

  <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modallogin">
    Launch demo modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success">
                <img src="{{asset('logo1.png')}}" width="32px" class="mx-2" alt="">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="modal-body" >


                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />


                <!-- Email Address -->
                <div class="form-group">
                    <x-label for="email" :value="__('Email')" />
                    {{-- :value="old('email')" --}}

                    <x-input id="email" class="block w-full mt-1 form-control" type="email" name="email"  required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block w-full mt-1 form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>


            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="mx-3 border rounded bg-success ">
                        {{ __('Log in') }}
                    </x-button>
                </div>

            </div>
        </form>
      </div>
    </div>
  </div>

</div>
