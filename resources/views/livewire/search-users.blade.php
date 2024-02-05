<div>
    <p><b>Search Users Livewire Component</b></p><hr/>
    <input 
        wire:model.live="search" 
        type="text" 
        placeholder="Search users..."
        class="p-2 border my-2 w-full"
    />
 
    <ul class="mt-2">
        @foreach($users as $user)
            <li>
                <span class="mr-2"><b>Name:</b> {{ $user->name }},</span>
                <b>Email:</b> {{ $user->email }}
            </li>
        @endforeach
    </ul>
</div>