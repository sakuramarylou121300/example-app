<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{
    // second example
    // public function handleClick(){
    //     dump("clicked");
    // }

    public $username = "testuser";

    public function createNewUser(){
        User::create([
            'name' => 'Mary Lou',
            'email'  => 'marylou123@gmail.com',
            'password'  => '123456'
        ]);
    }

    public function render()
    {
        $title = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' =>$users
        ]);
    }
}
