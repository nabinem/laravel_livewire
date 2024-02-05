<div class="mx-auto w-1/3 my-3 border p-3">
    <div x-data="{ open: @entangle('showDropdown').defer }" class="mb-3">
        <button @click="open = true">Show More(Entagle Livewire, Alpine Example)</button>
     
        <ul x-cloak  x-show="open" @click.outside="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
        <button wire:click="$set('showDropdown', true)" class="mt-2">
            LiveWire Update showDropdown
        </button>
    </div>
    <div class="mb-3" x-data="testFunc(1234)">
        
    </div>
    <div class="p-3 border mb-3">
        <p><b>Search Courses Livewire Component</b></p><hr/>
        <div>
            <input 
                wire:model.defer="term" 
                type="text" 
                placeholder="Search courses..."
                class="p-2 border my-2 w-full"
            />
        </div>
        <div class="flex items-center mb-4">
            <input wire:model.defer="status" id="live-checkbox" type="checkbox" value="live" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="live-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Live</label>
        </div>
        <div class="flex items-center">
            <input wire:model.defer="status" id="draft-checkbox" type="checkbox" value="draft" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="draft-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Draft</label>
        </div>
        <button wire:click="$refresh" type="button" class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Search
        </button>
    </div>
    <ul class="mt-2">
        @foreach($courses as $course)
            <li class="border-2 mb-3 p-2">{{ $course->title }}</li>
        @endforeach
    </ul>
</div>

@push('scripts')
    <script>
        const testFunc = (param) => ({
            alert(param)
        });
        document.addEventListener('alpine:init', () => {
            Alpine.data('testFunc', testFunc);
        })
    </script>
@endpush
