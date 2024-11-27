@extends("layouts.app")

@section('title', 'List of tasks')

@section('content')
{{--    @if(count($tasks))--}}
    @forelse($tasks as $task)
            <div>
                <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
    @empty
        <p>No tasks</p>
    @endforelse
{{--    @endif--}}
@endsection
