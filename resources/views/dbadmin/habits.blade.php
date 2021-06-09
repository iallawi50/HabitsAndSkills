@extends('layouts.app')

@section('content')
<div class="d-flex col-12 mb-3">

    
    <button onclick="window.location.reload()" type="button" class="btn btn-success" style="
direction: rtl;
">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"></path>
    <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"></path>
</svg>
</button>




<a href="users" type="button" class="btn btn-warning text-font mr-auto" style="
    direction: rtl;
    ">

عرض جميع المستخدمين

            </a>
            
            
</div>
<div class="col-12 mx-auto">
    @foreach ($habits as $habit)
        
    
    <a href="/dbadmin/show/habits/{{ $habit->id }}">
        
        <div class="card text-center bg-warning mb-3">
            <div class="card-body">
                <h1 class="card-text">{{ $habit->title }}</h1>
                <small class="
                @switch($habit->important)
                @case('مهم جدا')
                text-danger
                @break
                @case('عادي الأهمية')
                text-success
                @break
                
                @endswitch
                
                ">مدى الأهمية : {{ $habit->important }}</small><br>
                <small class="text-primary">تأثيرها على الجانب : {{ $habit->effect }}</small>
                <br>
                <small class="text-dark">هذي العادة تنتمي للمستخدم رقم :
    @foreach ($users as $user)
                    @if ($habit->user_id == $user->id)
                        {{$user->name}}
                    @endif
                    @endforeach
                </small>

            </div>
        </a>
        
        {{-- Footer --}}
        <div class="card-footer d-flex text-muted">
            <span class="mt-auto mb-auto">
          {{ $habit->created_at->diffForHumans() }}
            </span>
        
        <div class="d-flex text-danger mr-auto">
                     {{-- <a href="/dbadmin/show/habits/{{ $habit->id }}" class="btn btn-primary ml-2 " type="submit">عرض</a>
   <a href="/habits/{{ $habit->id }}/edit" class="btn btn-success ml-2">تعديل</a>
            <button class="btn btn-danger" form="delete" type="submit">حذف</button> --}}
        </div>
{{--         
            <form  class="" action="/habits/{{$habit->id}}" id="delete" method="post">
                @csrf 
                @method('DELETE')
                
            </form> --}}
        
        </div>
    </div>
    @endforeach
    
    @endsection