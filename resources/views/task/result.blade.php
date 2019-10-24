@extends('layouts.app');

@section('content')
    @foreach($tasks as $task)
        <div class="container">
    <div class="alert alert-primary" role="alert">
      <h2> {{$task->task}}

          <div style="color:white">
              <a class="btn btn-primary" href="{{route('task.edit',$task->id)}}" >Edit</a>
              <form method="POST" action="{{route('task.destroy',$task->id)}}"  >
                  @method('delete')
                  @csrf
                  <input type="submit" class="btn btn-danger" name="DELETE" value="DELETE" />
              </form>
          </div>

            </h2>
    </div>

        </div>
    @endforeach
@endsection
