<x-app-layout>
    <form method="GET" action="">
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="term"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search..." required>
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

    <div class="mx-auto w-1/3 my-3 border p-3">
        <livewire:counter />
    </div>

    <div class="mx-auto w-1/2 my-3 border p-3">
        @livewire('search-users')
    </div>
    <div class="mx-auto w-1/4 my-2">
        <div x-data="{ title: 'Hello' }" class="my-2">
            <button @click="
                title = 'Hello WWWWWWW!';
                $nextTick(() => { alert($el.innerText) });
            " x-text="title"></button>
        </div>
        <div x-data="{ count: 0 }" class="my-2">
            <button x-on:click="count++">Increment</button>

            <span x-text="count"></span>
        </div>
        <div x-data="{ open: false }" class="my-2">
            <button @click="open = ! open">Toggle Show/Hide</button>

            <div x-show="open" @click.outside="open = false">Contents...</div>
        </div>
        <div class="my-2">
            <button x-data="{ red: false }" x-bind:class="red ? 'bg-red-500' : ''" @click="red = ! red"
                x-init="$watch('red', value => alert(value))">
                Toggle Red
            </button>
        </div>
        <div class="my-2 border-2 p-2" x-data="{ statuses: ['open', 'closed', 'archived'] }">
            <template x-for="status in statuses">
                <div x-text="status"></div>
            </template>
        </div>
        <div class="my-2 border-2 p-2" x-data="{
            search: '',
    
            items: ['foo', 'bar', 'baz'],
    
            get filteredItems() {
                return this.items.filter(
                    i => i.startsWith(this.search)
                )
            }
        }">
            <input x-model="search" placeholder="Search..." class="mb-1">

            <ul>
                <template x-for="item in filteredItems" :key="item">
                    <li x-text="item"></li>
                </template>
            </ul>
        </div>
        <div x-data class="my-2">
            <button @click="$event.target.remove()">Remove Me</button>
        </div>
        <div x-data @foo="alert('foo was dispatched')">
            <button @click="$dispatch('foo')">Dispatch Custom foo event</button>
        </div>
        <div x-data="dropdown" class="my-2">
            <button @click="toggle">Toggle Content</button>

            <div x-show="open">
                Content...
            </div>
        </div>
    </div>
    <div class="mx-auto w-1/2 my-3 p-3 border">
        <h5>Posts from Remote Server</h5>
        <hr />
        <div class="my-2" x-data="{ posts: [] }"
            x-init="posts = await (await fetch('https://jsonplaceholder.typicode.com/todos/')).json()">
            <template x-for="post in posts" :key="post.id">
                <li :class="post.completed ? 'line-through' : ''"><span x-text="post.title"></span></li>
            </template>
        </div>
    </div>

    @push('scripts')

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown', () => ({
                open: false,
    
                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>
    @endpush

</x-app-layout>