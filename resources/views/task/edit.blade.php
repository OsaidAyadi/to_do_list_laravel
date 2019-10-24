@extends('layouts.app');

@section('content')

    <div class="container">

        <form method="POST" action="{{route('task.update',$task->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="task">Edit task</label>
                <input value="{{$task->task}}" type="text" name="task" class="form-control" id="task" aria-describedby="emailHelp" placeholder="Edit Task">
                <small id="emailHelp" class="form-text text-muted">Edit your task.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
