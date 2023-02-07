<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::find(2);
        //dd($users);

        echo  $users->name;
        echo "<br>";
        echo  $users->phoneTable->phone;
    }

    public function phoneData()
    {
        $phones = Phone::find(1);
        echo $phones->naymur->name;
    }

    // Eloquent Many to Many

    public function roleAssign()
    {
        $user = User::find(1);
        $roleId = [1, 2];
        $user->roles()->attach($roleId);
    }
}
