@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-700 text-sm font-normal">
                <a href="/projects">My Projects</a> / {{ $project->title }}
            </p>
            <a href="/projects/create" class="button button--blue">Add Project</a>
        </div>
    </header>
    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 lg:mb-6">
                <div class="mb-8">
                    <h2 class="text-gray-700 font-normal text-lg mb-3">Tasks</h2>                   
                    @forelse ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input class="w-full{{ $task->completed ? ' text-gray-500 line-through' : ''}}" type="text" name="body" value="{{ $task->body }}">
                                    <input type="checkbox" name="completed" id="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                </div>                                
                            </form>
                        </div>
                    @empty
                    @endforelse

                    <div class="card mb-3 bg-gray-100">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input type="text" name="body" id="body" class="w-full p-2" placeholder="Add a new task">
                        </form>
                    </div>
                    
                </div>
                <div>
                    <h2 class="text-gray-700 font-normal text-lg mb-3">General Notes</h2>
                    <form method="POST" action="{{ $project->path() }}">
                        @method('PATCH')
                        @csrf
                        <textarea 
                            class="card w-full mb-4"
                            name="notes"
                            style="min-height: 200px;"
                            placeholder="Add general notes about this project here"
                        >{{ $project->notes }}</textarea>

                        <button class="button button--blue" type="submit">Save notes</button>
                    </form>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
            </div>
        </div>
    </main>
    
@endsection
