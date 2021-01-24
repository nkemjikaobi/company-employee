@extends('layouts.app')

@section('content')
<form action="/companies/{{$company->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
        <input type='text' name='name' class='form-control' placeholder='Name' value='{{$company->name}}' >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' name='email' class='form-control' placeholder='Email' value='{{$company->email}}' >
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type='file' name='logo' id='logo'>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type='text' name='website' class='form-control' placeholder="Company's Website" value='{{$company->website}}'>
        </div>
        <div class="form-group">
            <button type='submit' class='btn btn-success'>Edit</button>
        </div>
        <div class="form-group">
            <a href='/companies'  class='btn btn-primary'>Back</a>
        </div>
    </form>
@endsection