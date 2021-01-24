@extends('layouts.app')

@section('content')
<form action="/employees/{{$employee->id}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">FirstName</label>
        <input type='text' name='firstName' class='form-control' placeholder='firstname' value='{{$employee->firstName}}' required >
        </div>
        <div class="form-group">
            <label for="email">LastName</label>
            <input type='text' name='lastName' class='form-control' placeholder='lastname' value='{{$employee->lastName}}' required >
        </div>
        <div class="form-group">
            <label for="email">Company</label>
            <input type='text' name='company' class='form-control' placeholder='where do you work' value='{{$employee->company}}' required >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' name='email' class='form-control' value='{{$employee->email}}' placeholder='your valid email'>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type='text' name='phone' class='form-control' value='{{$employee->phone}}' placeholder='phone number' >
        </div>
        <div class="form-group">
            <button type='submit' class='btn btn-success'>Edit</button>
        </div>
        <div class="form-group">
            <a href='/employees'  class='btn btn-primary'>Back</a>
        </div>
    </form>
@endsection