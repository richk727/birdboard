@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-default-700 text-sm font-normal">
                <a href="/projects">My Projects</a> / {{ $project->title }}
            </p>
            <div class="flex items-center">
                @foreach ($project->members as $member)
                    <img
                        class="mr-3 rounded-full w-6"
                        src="{{ gravatar_url($member->email) }}"
                        alt="{{ $member->name }}'s avatar'"
                        title="Shared with {{ $member->name }}">
                @endforeach
                <img
                    class="mr-3 rounded-full w-6"
                    src="{{ gravatar_url($project->owner->email) }}"
                    alt="{{ $project->owner->name }}'s avatar'"
                    title="Owned by {{ $project->owner->name }}">
                <a href="{{ $project->path() }}/edit" class="button button--blue ml-3">Edit Project</a>
            </div>
            
        </div>
    </header>
    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 lg:mb-6">
                <div class="mb-8">
                    <h2 class="text-default-700 font-normal text-lg mb-3">Tasks</h2>                   
                    @forelse ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf
                                <div class="flex">
                                    <input class="w-full bg-card{{ $task->completed ? ' text-default-700 line-through' : ' text-default-700'}}" type="text" name="body" value="{{ $task->body }}">
                                    <input type="checkbox" name="completed" id="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                                </div>                                
                            </form>
                        </div>
                    @empty
                    @endforelse

                    <div class="card mb-3 bg-gray-100">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf
                            <input type="text" name="body" id="body" class="w-full p-2 bg-card text-default-700" placeholder="Add a new task">
                        </form>
                    </div>
                    
                </div>
                <div>
                    <h2 class="text-default-700 font-normal text-lg mb-3">General Notes</h2>
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

                    @include ('errors')
                </div>
            </div>
            
            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
                @include ('projects.activity.card')

                @can('manage', $project)
                    @include ('projects.invite')
                @endcan
            </div>
        </div>
    </main>
    
@endsection
