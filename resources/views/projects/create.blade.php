@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="card w-1/2">
        <div class="py-5 px-10">
                <h1 class="text-2xl mb-8 text-center">Create a project</h1>
                <form method="POST" action="/projects">
                    @csrf 
                    <div>
                        <label for="title">Title</label>
                        <input class="form-control"type="text" name="title" id="title">
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="flex justify-between items-center">
                        <button class="button button--blue button--lg" type="submit">Create Project</button>
                        <div><a class="button button--blue button--tertiary"href="/projects">Cancel</a></div>
                    </div>
                </form>
        </div>
    </div>
</div>
    
@endsection