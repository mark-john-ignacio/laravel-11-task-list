@extends("layouts.app")

@section('title', 'List of tasks')

@section('content')
    <form action="{{ route('tasks.create') }}">
        <button type="submit">Create Task</button>
    </form>

    {{--    @if(count($tasks))--}}
    @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
            </div>
    @empty
        <p>No tasks</p>
    @endforelse
{{--    @endif--}}
@endsection
