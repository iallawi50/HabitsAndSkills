@extends('layouts.app')

@section('content')

@if (session('alert'))
    <div class="alert alert-danger text-font     text-center">
        {{ session('alert') }}
    </div>
@endif
<header dir="rtl" class="d-flex justify-content-between align-items-center my-3 text-font">
    <div class="h6 text-dark">
        <span class="text-muted">العادات والمهارات</span>
    </div>

    <div>
        <a href="/habits/create" class="btn btn-purple text-white px-4" role="button">عادة / مهارة جديد</a>
    </div>
</header>



<div class="row">

 @forelse ($habits as $habit)
    <div class="col-12 mx-auto">

        <a href="/habits/{{ $habit->id }}">
            
            <div class="card text-center bg-purple mb-3">
                <div class="card-body">
                  <h1 class="card-text text-white">{{ $habit->title }}</h1>
                  <small class="
                  @switch($habit->important)
    @case('مهم جدا')
        text-important
        @break
    @case('عادي الأهمية')
        text-success
        @break
        
@endswitch
                  
                  ">مدى الأهمية : {{ $habit->important }}</small><br>
                  <small class="text-primary">تأثيرها على الجانب : {{ $habit->effect }}</small>
                </div>
            </a>

                {{-- Footer --}}
                    @include('habits.footer')
              </div>
            
        
    </div>
 @empty

 <div class="m-auto align-content-center text-center text-font">
    <h3>لوحة العمل خالية من العادات والمهارات</h3>
    <p class="mt-5">
        <a href="/habits/create" class="btn btn-purple text-white btn-lg d-inline-flex align-items-center" role="button">أنشئ عادة جديدة الآن</a>
    </p>
</div>

 
 @endforelse


</div>


@endsection