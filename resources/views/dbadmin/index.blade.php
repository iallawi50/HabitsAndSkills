@extends('layouts.app')

@section('content')
    
<table class="table text-center">
    <thead class="bg-warning">
        <tr>
            <th>Habits</th>
            <th>E-Mail</th>
            <th>name</th>
            <th>ID</th>
        </tr>
    </thead>
    <tbody dir="rtl">
        @foreach ($users as $user) 
        <tr class="bg-dark text-white">
            <td>{{ count($user->habits)}}</td>
            <td>{{ $user->email}}</td>
            <td>{{$user->name}}</td>
            <th>{{ $user->id }}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection