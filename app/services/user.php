<?php
namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function create(User $user) :user
    {
        return User::create([
            "name"=> $user->name,
            "email"=> $user->email,
            'role'=> $user->role,
            "password"=> Hash::make($user->password),
        ]);
    }

    
}

?>