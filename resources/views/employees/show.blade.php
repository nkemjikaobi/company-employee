@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex">
    <h3>{{$employee->firstName}}  {{$employee->lastName}}</h3>
    </div>
    <div class="card-body">
        <b>Email:</b>  <span>{{$employee->email}}</span><br><hr>
        <b>Company :</b> <span>{{$employee->company}}</span><br><hr>
    <b>Phone : </b> <span>{{$employee->phone}}</span>
    </div>
</div>
<hr>
<a href='/employees' class='btn btn-outline-info'>Back</a><br>



    
@endsection