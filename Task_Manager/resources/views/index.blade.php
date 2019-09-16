@extends('template')
@section('title')
    Task Manager
@endsection
@section('content')
<div class="card mx-auto" style="max-width: 30rem">
           
        <div class="card-body">
            <h4 class="card-title">Task Manager</h4>
            
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($list as $ls)
            <li class="list-group-item">{{$ls->name}} 
            <a href="view/{{$ls->id}}" class="btn btn-sm btn-primary float-right ml-2">View</a>   
             
            </li>
            @endforeach
           
            
        </ul>
    </div>
@endsection