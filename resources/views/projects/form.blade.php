<div>
    <label for="title">Title</label>
    <input
        class="form-control bg-card text-default-700"
        type="text"
        name="title"
        placeholder="My next awesome project"
        value="{{ $project->title }}">
</div>
<div>
    <label for="description">Description</label>
    <textarea
        class="form-control bg-card text-default-700"
        name="description"
        rows="5"
        placeholder="A breif overview of the project">{{ $project->description }}</textarea>
</div>

<div class="flex justify-between items-center">
    <button class="button button--blue button--lg" type="submit">{{ $buttonText }}</button>
    <div><a class="button button--blue is-outlined"href="{{ $project->path() }}">Cancel</a></div>
</div>
@if ($errors->any)
<div class="field mt-6">
    @foreach ($errors->all() as $error)
        <p class="p-2 text-white bg-red-500 mb-2">{{ $error }}</p>
    @endforeach 
</div>
@endif
    