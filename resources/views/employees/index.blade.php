@extends('layouts.app')

@section('content')
        <h3>Employees</h3>
        <hr>
        <a href='/companies' class='btn btn-info' style='float:right;'>Go to Companies</a>
        <a href='/employees/create' class='btn btn-success'>Add Employee</a>
        <table class='table table-bordered table-striped mt-4'>
                <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                </tr>
                @foreach ($employees as $employee)
                        <tr>
                                <td><a href='/employees/{{$employee->id}}'>{{$employee->firstName}}</a></td>
                                <td><a href='/employees/{{$employee->id}}'>{{$employee->lastName}}</a></td>
                                <td><a href='/employees/{{$employee->id}}'>{{$employee->company}}</a></td>
                                <td><a href='/employees/{{$employee->id}}'>{{$employee->email}}</a></td>
                                <td><a href='/employees/{{$employee->id}}'>{{$employee->phone}}</a></td>
                                <td><a href='/employees/{{$employee->id}}/edit' class='btn btn-primary'>EDIT</td>
                               <td>
                                        <form action="/employees/{{$employee->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button  type ='submit' class='btn btn-danger'>DELETE</button>
                                        </form>
                                </td>
                        </tr>
                @endforeach
        </table>
        <div class="container">
                <div class="row">
                        <div class="col-md-9 offset-4">
                                {{$employees->links()}}
                        </div>
                </div>
        </div>
@endsection
