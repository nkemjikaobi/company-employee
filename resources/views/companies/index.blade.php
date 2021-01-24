@extends('layouts.app')

@section('content')
        <h3>Companies</h3>
        <hr>
        <a href='/companies/create' class='btn btn-success'>Create New Company</a>
        <a href='/employees' class='btn btn-primary' style='float:right;'>View Employees</a>
        <table class='table table-bordered table-striped mt-4'>
                <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                </tr>
                @foreach ($companies as $company)
                        <tr>
                                <td><a href='/companies/{{$company->id}}'>{{$company->name}}</a></td>
                                <td><a href='/companies/{{$company->id}}'>{{$company->email}}</a></td>
                                <td style='text-align:center;'><a href='/companies/{{$company->id}}'><img src = "/storage/{{$company->logo}}" class='rounded-circle center' style='height:70px;width:70px;'></a></td>
                                <td><a href='/companies/{{$company->id}}'>{{$company->website}}</a></td>
                                <td><a href='/companies/{{$company->id}}/edit' class='btn btn-primary'>EDIT</td>
                               <td>
                                        <form action="/companies/{{$company->id}}" method="post">
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
                                {{$companies->links()}}
                        </div>
                </div>
        </div>
@endsection
