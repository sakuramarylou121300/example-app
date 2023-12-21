<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Clicker extends Component
{
    // second example
    // public function handleClick(){
    //     dump("clicked");
    // }

    // public $username = "testuser";
    use WithPagination;
    
    #[Rule('required| min:2| max:50')]
    public $name = '';

    #[Rule('required| email| unique:users')]
    public $email = '';

    #[Rule('required| min: 5')]
    public $password = '';

    public function createNewUser(){
        $validated = this()->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        // reset after create or action
        $this->reset(['name', 'email', 'password']);
        // message after action
        request()->session()->flash('success', 'User Created Successfully');
    }

    public function render()
    {
        // the users will be use in frontend
        $users = User::paginate(5);
        return view('livewire.clicker', [
            'users' =>$users
        ]);
    }
}
