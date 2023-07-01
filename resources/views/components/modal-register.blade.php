<!-- Button trigger modal -->
<div class="">

    <!-- Button trigger modal -->
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalsignup">
      Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="modalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-success">
                  <img src="{{asset('logo1.png')}}" width="32px" class="mx-2" alt="">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Signup</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <form method="POST" action="{{ route('register') }}">
                  @csrf
              <div class="modal-body">

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <!-- Name -->
                    <div class="form-group">
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block w-full mt-1 form-control" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 form-group">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block w-full mt-1 form-control" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 form-group">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block w-full mt-1 form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 form-group">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block w-full mt-1 form-control"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                    {{-- Select Option Role Type --}}
                    <div class="mt-4 form-group">
                        <x-label for="role_id" value="{{__('Register as:')}}" />
                        <select name="role_id"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm form-control focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50" id="">

                            <option value="farmer">Farmer</option>
                            <option value="guest">Guest</option>

                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4 rounded bg-success">
                            {{ __('Register') }}
                        </x-button>
                    </div>


                </div>
            </form>

        </div>
      </div>
    </div>

  </div>
