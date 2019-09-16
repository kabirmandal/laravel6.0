@extends('template')
@section('title')
{{$lists->name}}
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default" style="">
            <div class="card-header">
                <h3 class="text-center">Task Manager</h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">{{$lists->name}}</h4> 
                <div class="card-text">{{$lists->description}}</div>
            </div>
        </div>
    <a class="btn btn-primary" href="/edit/{{$lists->id}}" role="button">Edit</a>
    <a class="btn btn-primary" href="/delete/{{$lists->id}}" role="button">Delete</a>


    </div>
</div>
    
    
    
@endsection