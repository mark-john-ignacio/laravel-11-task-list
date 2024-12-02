@extends("layouts.app")

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <p>
        @if($task->completed)
            Completed
        @else
            Not Completed
        @endif
    </p>

    <div>
        <form action="{{ route('tasks.edit', $task) }}">
            <button type="submit">Edit Task</button>
        </form>

        <form method="POST" action="{{ route('tasks.toggle-complete', ["task" => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit">
                Mark as {{ $task->completed ? 'not completed' : 'complete'}}
            </button>
        </form>

        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Task</button>
        </form>
    </div>
@endsection
