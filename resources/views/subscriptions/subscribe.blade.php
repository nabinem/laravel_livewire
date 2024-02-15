<x-app-layout>
    <form class="max-w-sm mx-auto my-5 py-3" method="POST" action="{{ route('subscribe.store') }}">
        @csrf
        <div class="mb-5">
            <label for="subsriptions" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Choose a Subscription Plan
            </label>
            <select id="subscriptions"  name="subscription_plan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="price_1Oj4SxBQAEBH87gFsITmE62N">Single Line Dialer</option>
                <option value="price_1Oj4UTBQAEBH87gFvFxN5kE7">Double Line Dialer</option>
                <option value="price_1Oj4V3BQAEBH87gFQ7q335L3">Triple Line</option>
           </select>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Subscribe
        </button>
    </form>

</x-app-layout>