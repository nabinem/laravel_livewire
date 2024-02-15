<x-app-layout>
    <div class="mx-auto w-1/2 my-3 border p-3">
        <h5 class="font-bold">Account Details</h5>
        <hr class="m-2"/>
        <div class="my-3">
            <b>Name:</b> {{ $user->name }}
            <a 
                href="{{ route('logout') }}" 
                class="text-white m-3 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >
                Log Out
            </a>
        </div>

        <div class="mt-5">
            <a 
                href="{{ route('subscribe') }}" 
                class="text-white mr-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >
                Subscribe 1 
            </a>
            <a 
                href="{{ route('subscribe2') }}" 
                class="text-white mr-3 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >
                Subscribe 2
            </a>
            @if (auth()->user()?->subscribed())
                <a 
                    href="{{ route('billing') }}" 
                    class="text-white mr-3 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                    Billing
                </a>
            @endif
        </div>
    </div>
</x-app-layout>