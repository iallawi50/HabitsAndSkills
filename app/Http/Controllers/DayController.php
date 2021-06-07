<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Habit;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habit $habit, Day $day)
    {
        abort_if(auth()->user()->id !== $habit->user_id, redirect('habits')->with(['alert' => 'غير مصرح لك بالتعديل على عادات/مهارات الآخرين']));
        
        $day->update([
            'done' => request()->has('done')
        ]);

        return back();
    }
}
