<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        return view('profile');
    }

    public function update()
    {
        $userId = auth()->id();
        $data = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'confirmed' ,'min:8'],
        ]);

        if(request()->has('password'))
        {
            $data['password'] = Hash::make(request('password'));
        }

        User::FindOrFail($userId)->update($data);
        return redirect('/profile')->with(['updated' => 'تم تحديث بياناتك بنجاح']);
        
        }        

}
