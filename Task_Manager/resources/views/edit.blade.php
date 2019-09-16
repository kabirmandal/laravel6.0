@extends('template')
@section('title')
    Create New Task
@endsection

@section('content')
<div class="card mx-auto" style="max-width: 30rem">
    <div class="card-header">
        <h3>Task Manager</h3>
    </div>
    <div class="card-body">
            <ul class="list-group list-group-flush">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                    @endforeach
            </ul>
        
        <form action="{{url('update')}}" method="POST">
            @csrf
        <input type="hidden" name="id" value="{{$task->id}}">
            <div class="form-group">
              <label for="">Name</label>
            <input type="text" name="name" value="{{$task->name}}" id="" class="form-control" placeholder="" aria-describedby="helpId"> 
            </div>

            <div class="form-group">
              <label for="">Description</label>
              <textarea name="description" class="form-control">{{$task->description}}</textarea>
              
            </div>

            <input name="" id="" class="btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
</div>
@endsection