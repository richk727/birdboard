@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-default-700 text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="button button--blue">Add Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3 px-1">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include ('projects.card')
            </div>
        @empty 
            <div>No projects available yet!</siv>
        @endforelse
    </main>

    <modal name="hello-world" classes="p-10 bg-card text-default-500 rounded-lg" height="auto">
        <h1 class="font-normal mb-16 text-center text-2xl">Let's Start Something New</h1>
        <div class="flex">
            <div class="flex-1 mr-4">
                <div class="mb-4">
                    <label for="title" class="text-sm block mb-2">Title</label>
                    <input type="text" name="title" id="title" class="border border-muted-light p-2 text-xsm block w-full rounded bg-card">
                </div>

                <div class="mb-4">
                    <label for="escription" class="text-sm block mb-2">Description</label>
                    <textarea
                        name="description"
                        id="description"
                        rows="7"
                        class="border border-muted-light p-2 text-xsm block w-full rounded bg-card"
                    ></textarea>
                </div>
            </div>
            <div class="flex-1 ml-4">
                <div class="mb-4">
                    <label class="text-sm block mb-2">Need Some Tasks?</label>
                    <input type="text"
                        class="border border-muted-light p-2 text-xsm block w-full rounded bg-card"
                        placeholder="Task One..."
                    >
                </div>
                <button type="button" class="inline-flex items-center text xsm">
                    <span>Add New Task Field</span>
                </button>
            </div>
        </div>
        
        <footer class="flex justify-end">
            <button class="button button--blue is-outlined mr-2">Cancel</button>
            <button class="button button--blue">Create Project</button>
        </footer>
    </modal>

    <a href="" @click.prevent="$modal.show('hello-world')">Show Modal</a>
@endsection
