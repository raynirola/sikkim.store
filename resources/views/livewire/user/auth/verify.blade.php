<div class="flex flex-col h-screen sm:h-auto justify-end">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="fixed bottom-0 w-full sm:relative px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10 box-shadow">

            <div class="mb-5 flex flex-col items-center justify-center">
                <a href="{{ route('home') }}" title="Sikkim Store Home Page" class="flex items-center justify-start" aria-label="Sikkim Store">
                    <x-logo_type class="w-auto h-8"/>
                </a>
                <h2 class="text-sm font-semibold text-center text-gray-900 leading-9">
                    Verify your email address
                </h2>
                <div class="inline-flex mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                    Or
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                                class="ml-2 font-medium text-green-600 hover:text-green-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            sign out
                        </button>
                    </form>
                </div>
            </div>

            @if (session('resent'))
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow"
                     role="alert">
                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd">
                        </path>
                    </svg>
                    <p>A fresh verification link has been sent to your email address.</p>
                </div>
            @endif

            <div class="text-sm text-gray-700">
                <p>Before proceeding, please check your email for a verification link.</p>
                <p class="mt-3">
                    If you did not receive the email,
                    <a wire:click="resend"
                       class="text-green-700 cursor-pointer hover:text-green-600 focus:outline-none focus:underline transition ease-in-out duration-150">
                        click here to request another.
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
