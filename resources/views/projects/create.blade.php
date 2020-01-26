@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="card w-1/2">
            <div class="py-5 px-10">
                    <h1 class="text-2xl mb-8 text-center">Create a project</h1>
                    <form method="POST" action="/projects">
                        @csrf 
                        @include('projects.form', [
                            'project' => new App\Project,
                            'buttonText' => 'Create Project'
                        ])
                    </form>
            </div>
        </div>
    </div>
    
@endsection