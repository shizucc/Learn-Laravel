<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function index(){
        $data = [
            'title' => 'register'
        ];
        return view('register.index', $data);
    }

    public function store(Request $request){
        $validated_data = $request->validate([
            'name'=> 'required|max:60',
            'username' => [
                'required',
                'max:16',
                'unique:users'
            ],
            'email'=> [
                'required',
                'email:dns'
            ],
            'password' => [
                'required',
                'min:8'
            ]
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        User::create($validated_data);
        return redirect('/login')->with('success', 'Berhasil register, silahkan login');
    }
}
