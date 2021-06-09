@extends('layouts.app')

@section('content')
    
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