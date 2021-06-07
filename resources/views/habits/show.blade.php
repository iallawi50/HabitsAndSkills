@extends('layouts.app')

@section('content')

<header dir="rtl" class="d-flex justify-content-between align-items-center my-3 text-font">
    <div class="h6 text-dark">
       <a href="/home">العادات والمهارات</a> / <span class="text-muted">{{ $habit->title }}</span>
    </div>
</header>

<style>
    input{
        width: 20px;
        height: 20px;
    }
    

    .table th, .table td {
        
        border-top: black solid 1px;
        border-bottom: black solid 1px;
        vertical-align: middle;
        }

        .themytable {
            overflow: auto;
        }
        .row {
            margin-right: 0;
        }
    
</style>

<div class="col-12 mx-auto">

    <a href="/habits/{{ $habit->id }}">
        
        <div class="card text-center bg-warning mb-3">
            <div class="card-body">
              <h1 class="card-text">{{ $habit->title }}</h1>
              <small class="text-danger">مدى الأهمية : {{ $habit->important }}</small><br>
              <small class="text-success">تأثيرها على الجانب : {{ $habit->effect }}</small>
            </div>
        </a>

            {{-- Footer --}}
            <div class="card-footer d-flex text-muted">
                <span class="mt-auto mb-auto">
              {{ $habit->created_at->diffForHumans() }}
                </span>
            
            <div class="d-flex text-danger mr-auto">
                <a href="/habits/{{ $habit->id }}/edit" class="btn btn-success ml-2">تعديل</a>
                <button class="btn btn-danger" form="delete" type="submit">حذف</button>
            </div>
            
                <form  class="" action="/habits/{{$habit->id}}" id="delete" method="post">
                    @csrf 
                    @method('DELETE')
                    
                </form>
            
            </div>
            
          </div>

{{-- <div class="d-flex flex-row">

    
    <?php $x = 1 ?>
        @foreach ($habit->days as $day)
        <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
            @csrf
            @method('PATCH')
            {{ $x }}
            <?php ++$x ?>
            <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
        </form>
        

        @endforeach
    </div> --}}

    
<div class=" themytable">


    <table class="table text-center text-font">
        <tr  class="bg-warning">
            <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع الاول</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td> النقاط</td>
        </tr>
        
        <?php 
            $w1 = 0;
            $w2 = 0;
            $w3 = 0;
            $w4 = 0;
            $w5 = 0;
            $w6 = 0;
            
            ?>
                    @foreach($habit->days as $day)
                    @if($loop->iteration > 0 && $loop->iteration < 8)
                    <td>
                        <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                            @csrf
                            @method('PATCH')
                            <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
                        </form>
                        <?php 
                                if ($day->done == true) {
                                    ++$w1;
                                }
                                ?>
                    @endif
                    @endforeach
                    <td>{{ $w1 }}</td>
                </tr>
                
                <tr  class="bg-warning">
                    <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع الثاني</td>
                    <td>8</td>
                    <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td> النقاط</td>
            </tr>
            
            @foreach($habit->days as $day)
            @if($loop->iteration > 7 && $loop->iteration < 15)
            <td>
                <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                    @csrf
                    @method('PATCH')
                    <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
                </form>
            </td>
            <?php 
                if ($day->done == true) {
                    ++$w2;
                }
                ?>
            @endif
            @endforeach
            <td>{{ $w2 }}</td>
        </tr>
        
        
        <tr  class="bg-warning">
            <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع الثالث</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td> النقاط</td>
        </tr>
        
            @foreach($habit->days as $day)
            @if($loop->iteration > 14 && $loop->iteration < 22)
                 <td>
                     <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                        @csrf
                        @method('PATCH')
                        <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
                    </form>
                    <?php 
                    if ($day->done == true) {
                        ++$w3;
                    }
                    ?>
                </td>
                @endif
                @endforeach
                <td>{{ $w3 }}</td>
            </tr>
            
            
            <tr  class="bg-warning">
                <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع الرابع</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td> النقاط</td>
            </tr>
            
            @foreach($habit->days as $day)
            @if($loop->iteration > 21 && $loop->iteration < 29)
            <td>
                <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                    @csrf
                    @method('PATCH')
                    <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
                </form>
            </td>
            <?php 
                if ($day->done == true) {
                    ++$w4;
                }
                ?>
            @endif
            @endforeach
            <td>{{ $w4 }}</td>
        </tr>
        
        
        <tr  class="bg-warning">
            <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع الخامس</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td> النقاط</td>
        </tr>
        
        @foreach($habit->days as $day)
        @if($loop->iteration > 28 && $loop->iteration < 36)
        <td>
            <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                @csrf
                @method('PATCH')
                <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
            </form>
        </td>
        <?php 
                if ($day->done == true) {
                    ++$w5;
                }
                ?>
            @endif
            @endforeach
            <td>{{ $w5 }}</td>
        </tr>
        
        <tr>
            <td rowspan="2" class="bg-warning mt-3" style="vertical-align: middle;">الاسبوع السادس</td>
            <td class="bg-warning">36</td>
            <td class="bg-warning">37</td>
                <td class="bg-warning">38</td>
                <td class="bg-warning">39</td>
                <td class="bg-warning">40</td>
                <td></td>
                <td></td>
                
                <td class="bg-warning"> النقاط</td>
            </tr>
            
            @foreach($habit->days as $day)
            @if($loop->iteration > 35 && $loop->iteration < 45)
            <td>
                <form class="float-start" action="/habits/{{$habit->id}}/days/{{$day->id}}" method="POST" class="d-flex flex-row">
                    @csrf
                    @method('PATCH')
                    <input onclick="this.form.submit()" type="checkbox" name="done" {{$day->done ? 'checked' : ''}}>
                </form>
            </td>
            <?php 
                if ($day->done == true) {
                    ++$w6;
                }
                ?>
            @endif
            @endforeach
            <td></td>
            <td></td>
            <td>{{ $w6 }}</td>
        </tr>
        
        <?php
                $result = $w1 + $w2 + $w3 + $w4 + $w5 + $w6
                ?>
            <tr style="color: white; text-shadow:0px 0px 15px black">
                <td class="bg-success" colspan="4">مجموع النقاط</td>
                <td class=bg-success>:</td>
                <td class="bg-success" colspan="4">{{ $result }}</td>
            </tr>
            
        </table> 
    </div>

        
        
        
        
        @endsection