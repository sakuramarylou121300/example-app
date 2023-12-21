<div class='px-5 py-5'>
    <!-- <p>Hello Youtube!</p> -->
    <!-- <button wire:click="createNewUser">
        Create New User
    </button> -->

    <!-- this is the message after create or action -->
    @if(session('success'))
       <span class='w-100 py-3 bg-green-600 rounded px-3 py-3 text-white'>{{session('success')}}</span> 
    @endif

    <form wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="name" type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="email" type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="password" type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{$message}}</span>
        @enderror

        <!-- adding prevent will prevent normal execution -->
        <button class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>
    <!-- render all users -->
    @foreach($users as $user)
        <h3>{{$user->name}}</h3>
    @endforeach

    <!-- pagination -->
    {{$users->links('vendor.livewire.test')}}
</div>
