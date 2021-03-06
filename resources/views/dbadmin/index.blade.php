@extends('layouts.app')

@section('content')

<style>
.themytable {
            overflow: auto;
        }
</style>
<div class="d-flex mb-3">

    
    <button onclick="window.location.reload()" type="button" class="btn btn-success" style="
direction: rtl;
">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"></path>
    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"></path>
</svg>
</button>




<a href="habits" onclick="window.location.reload()" type="button" class="btn btn-warning text-font mr-auto" style="
    direction: rtl;
    ">

عرض جميع العادات

            </a>
            
            
</div>
<div class="themytable">

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
</div>
    @endsection