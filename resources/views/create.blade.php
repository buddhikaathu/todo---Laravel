@extends('layouts.app')
@section('title')
    Create Todo
@endsection
@section('content')
<form action="store" method="post" class="mt-4 p-4">
    @csrf
    @if (session()->has('sucess'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
        
    @endif
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Submit">
    </div>
</form>
@endsection