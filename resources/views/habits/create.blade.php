@extends('layouts.app')

@section('content')

<div class="row" dir="rtl">
    <div class="col-12 mx-auto">

            
            <div class="card text-center bg-purple text-light mb-3">
                <div class="card-body">
                    <form action="/habits" method="POST" class="col-8 mx-auto text-right">
                        @include('habits.form', ['habit' => new App\Models\Habit])
            </div>
    
    
 
@endsection