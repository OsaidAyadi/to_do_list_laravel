@extends('layouts.app');

@section('content')

<div class="container">

    <form method="POST" action="{{route('task.store')}}">
        @csrf
        <div class="form-group">
            <label for="task">Task</label>
            <input type="text" name="task" class="form-control" id="task" aria-describedby="emailHelp" placeholder="Enter Task">
            <small id="emailHelp" class="form-text text-muted">Enter task you will doing later.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    @endsection
