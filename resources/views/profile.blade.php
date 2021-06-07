@extends('layouts.app')

@section('title', 'الملف الشخصي')



<style>
    .red {color:red;}
    .green {color: green;}
    .gold {color:gold;}
</style>

@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card p-5">
                <div class="text-center">
                
                    <h3 class="mt-4 font-weight-bold">{{ auth()->user()->name }} </h3>

                </div>


                    <div class="card-body text-right" dir="rtl">
                        
                    <form action="/profile" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                            <label for="name">الاسم</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}">
                            @error('name')
                                <div class="text-danger">
                                    <small>{{$message}}</small>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}">
                            @error('email')
                                <div class="text-danger">
                                    <small>{{$message}}</small>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">كلمة المرور</label>
                            <input type="password" name="password" id="password" class="form-control">
                        @error('password')
                            <div class="text-danger">
                            <small>{{$message}}</small>
                            </div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirmation">تأكيد كلمة المرور</label>
                            <input type="password" name="password_confirmation" id="password-confirmation" class="form-control">
                            @error('password-confirmation')
                                <div class="text-danger">
                                    <small>{{$message}}</small>
                                </div>
                            @enderror
                        </div>
                        @if (session('updated'))
    <div class="alert alert-success text-center">
        {{ session('updated') }}
    </div>
@endif

                        <div class="form-group d-flex mt-5 flex-row-reverse">
                            <button type="submit" class="btn btn-success mr-2 ml-2">حفظ التعديلات</button>
                            <button type="submit" class="btn btn-danger" form="logout">تسجيل الخروج</button>
                        </div>
                    </form>
                    </div>

                    <form action="/logout" method="post" id="logout">
                    @csrf
                    </form>

                    


                
            </div>
        </div>
    </div>
@endsection
