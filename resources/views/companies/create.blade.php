@extends('layouts.app')

@section('content')
    <form action="/companies" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type='text' name='name' class='form-control' placeholder='Name' >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' name='email' class='form-control' placeholder='Email' >
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type='file' name='logo' id='logo'>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type='text' name='website' class='form-control' placeholder="Company's Website" >
        </div>
        <div class="form-group">
            <button type='submit' class='btn btn-success'>Create</button>
        </div>
        <div class="form-group">
            <a href='/companies'  class='btn btn-primary'>Back</a>
        </div>
    </form>
@endsection