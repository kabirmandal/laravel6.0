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
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success')}}
            </div>
        @endif
            <ul class="list-group list-group-flush">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                    @endforeach
            </ul>
        
        <form action="{{url('create_post')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId"> 
            </div>

            <div class="form-group">
              <label for="">Description</label>
              <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>

            <input name="" id="" class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection