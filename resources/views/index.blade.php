@extends('layouts.app')
@section('title')
    My To Do App
@endsection
@section('content')
<div class="row mt-3">
    <div class="col-12 align-self-center">
        <ul class="list-group">
            @foreach ($todo as $item)
                <li class="list-group-item"><a href="details/{{$item->id}}" style="color: cornflowerblue">{{$item->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection