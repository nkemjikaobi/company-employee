@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex">
        <h3>{{$company->name}}</h3>
    </div>
    <div class="card-body">
        <b>Email:</b>  <span>{{$company->email}}</span><br><hr>
        <b>Visit our website :</b> <span><a href=''>{{$company->website}}</a></span><br><hr>
    <b>Logo :</b> <img src='/storage/{{$company->logo}}' class='rounded-circle' style='height:70px;width:70px;'>
    </div>
</div>
<hr>
<a href='/companies' class='btn btn-outline-info'>Back</a><br>



    
@endsection