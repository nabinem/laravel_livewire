<x-app-layout>
    {!! 
        Form::model($course, [
            'route' => ['courses.update', $course->id],
            "class" => "max-w-sm mx-auto my-5 py-3",
            "method" => "PUT"
        ])
    !!}
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            {!! 
                Form::text('title', null, [
                    'name' => "title",
                    "class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                ]);
            !!}
            @error('title')
                <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            {!!
                Form::select('status', ['live' => 'Live', 'draft' => 'Draft'], null, 
                [
                    "class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                ]);
            !!}
        </div>
        <div class="flex items-center mb-5">
            {!! 
                Form::checkbox('pinned', 1, null, [
                    'class' => "w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                ]);
            !!}
            <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pinned</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Save
        </button>
        {!! Form::close() !!}
</x-app-layout>
  