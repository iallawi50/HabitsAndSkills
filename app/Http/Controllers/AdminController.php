<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $users = User::class::get();

        abort_if(auth()->user()->email !== 'aahh50018@gmail.com', redirect('habits')->with(['alert' => 'غير مصرح لك بالدخول']));
        return view('dbadmin.index', compact('users'));
    
    }

    public function allHabits()
    {
        $habits = Habit::class::get();
        $users = User::class::get();

        abort_if(auth()->user()->email !== 'aahh50018@gmail.com',
         redirect('habits')
         ->with(['alert' => 'غير مصرح لك بالدخول']));

        return view('dbadmin.habits', compact(['habits', 'users']));
    }

    public function show(Habit $habit)
    {
        abort_if(auth()->user()->email !== 'aahh50018@gmail.com',
        redirect('habits')
        ->with(['alert' => 'غير مصرح لك بالدخول ']));
       $habit->days = $habit->days->sortBy('id');
        return view('dbadmin.show', compact('habit'));
    }
}
