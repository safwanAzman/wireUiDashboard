@section('title', 'Sign in to your account')

<div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <div class="sm:mx-auto sm:w-full sm:max-w-md mb-6">
                <a href="{{ route('login') }}">
                    <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                </a>

                <h2 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                    Sign in to your account
                </h2>

                    <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                        Or
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            create a new account
                        </a>
                    </p>
            </div>
            <form wire:submit.prevent="authenticate">
                <div>
                    <x-input
                        wire:model.lazy="email"
                        id="email"
                        name="email"
                        type="email"
                        icon="user"
                        placeholder="Email"
                    />
                </div>

                <div class="mt-6">
                    <x-inputs.password
                        wire:model.lazy="password"
                        id="password"
                        type="password"
                        placeholder="Password"
                    />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            Remember
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
