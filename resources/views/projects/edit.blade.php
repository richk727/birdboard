@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="card w-1/2">
            <div class="py-5 px-10">
                    <h1 class="text-2xl mb-8 text-center">Edit project</h1>
                    <form method="POST" action="{{ $project->path() }}">
                        @csrf 
                        @method('PATCH') 
                        @include('projects.form', [
                            'buttonText' => 'Edit Project'
                        ])
                    </form>
            </div>
        </div>
    </div>
@endsection