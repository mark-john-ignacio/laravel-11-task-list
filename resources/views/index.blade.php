@extends("layouts.app")

@section('title', 'List of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="font-medium text-gray-700 underline decoration-pink-500">
            Create Task
        </a>
    </nav>


    {{--    @if(count($tasks))--}}
    @forelse($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                @class(['line-through' => $task->completed])
                >
                    {{ $task->title }}
                </a>
            </div>
    @empty
        <p>No tasks</p>
    @endforelse
{{--    @endif--}}

    @if($tasks->count())
        <nav class="mt-4">
        {{ $tasks->links() }}
        </nav>
    @endif
@endsection
