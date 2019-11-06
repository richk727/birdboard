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
                    <div class="card"> Lorem Ipsum.</div>
                </div>
                <div>
                    <h2 class="text-gray-700 font-normal text-lg mb-3">General Notes</h2>
                    <div class="card"> Lorem Ipsum.</div>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
            </div>
        </div>
    </main>
    
@endsection
