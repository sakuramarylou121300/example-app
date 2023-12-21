<div>

    <h2>{{$username}}</h2>

    <h1>
        {{$title}}
    </h1>

    {{count($users)}}
    <!-- <p>Hello Youtube!</p> -->
    <button wire:click="createNewUser">
        Create New User
    </button>
</div>
