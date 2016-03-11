@extends('layouts.app')

@section('content')

  <div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
    <form action="{{ url('task') }}" class="form-horizontal" method="POST">
      {!! csrf_field() !!}

      <!-- Task Name -->
      <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">Task</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="task-name" class="form-control">
        </div>
      </div>

      <!-- Add Task Button -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Add Task
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- TODO: Current Task -->

@endsection
