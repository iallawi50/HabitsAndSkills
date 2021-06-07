@extends('layouts.app')

@section('content')

<div class="row" dir="rtl">
    <div class="col-12 mx-auto">

            
        <div class="card text-center bg-warning mb-3">
            <div class="card-body">
                <form action="/habits/{{ $habit->id }}" method="POST" class="col-8 mx-auto text-right">
    
        @method('PATCH')
        @include('habits.form')
@endsection