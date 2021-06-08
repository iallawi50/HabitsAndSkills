<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habits = auth()->user()->habits;
        return view('habits.index', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'important' => 'required|in:مهم جدا,عادي الأهمية',
            'effect' => 'required|in:الروحي,الصحي,الاجتماعي,العلمي,المهني,المالي',
        ]);
        
        $data['user_id'] = auth()->id();

        $habit = Habit::create($data);
        $x = 0;
        while ($x !=  40) {
            $habit->days()->create();
            $x++;
        }

        return redirect('/habits');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habit  $habit
     * @return \Illuminate\Http\Response
     */
    public function show(Habit $habit)
    {
        abort_if(auth()->user()->id !== $habit->user_id, redirect('habits')->with(['alert' => 'غير مصرح لك بالدخول الى عادات/مهارات الآخرين']));
       $habit = $habit->sortBy('id');
        return view('habits.show', compact('habit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habit  $habit
     * @return \Illuminate\Http\Response
     */
    public function edit(Habit $habit)
    {
        abort_if(auth()->user()->id !== $habit->user_id, redirect('habits')->with(['alert' => 'غير مصرح لك بالتعديل على عادات/مهارات الآخرين']));
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habit  $habit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habit $habit, Day $day)
    {
        abort_if(auth()->user()->id !== $habit->user_id, redirect('habits')->with(['alert' => 'غير مصرح لك بالتعديل على عادات/مهارات الآخرين']));
      $data =  request()->validate([
            'title' => 'required',
            'important' => 'required|in:مهم جدا,عادي الأهمية',
            'effect' => 'required|in:الروحي,الصحي,الاجتماعي,العلمي,المهني,المالي',
      ]);
      
        $habit->update($data);
        return redirect('/home');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habit  $habit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habit $habit)
    {
        abort_if(auth()->user()->id !== $habit->user_id, redirect('habits'));
        $habit->delete();
        return redirect('/habits');
    }
}
