@extends('layouts.app')
@section('title')
    Edit
@endsection
@section('content')

<form action="../update" method="POST" class="mt-4 p-4">
    @csrf
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session->get('success')}}
    </div>
    @endif
    <div class="form-group m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name" value="{{$todo->name}}">
    </div>
    <div class="form-group m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" rows="3" name="description">{{$todo->description}}</textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
        <input type="hidden" name="id" value="{{$todo->id}}">
    </div>
</form>
@endsection