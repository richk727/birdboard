<div class="card flex flex-col">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-blue-300 pl-4">
        Invite a User
    </h3>   
    <form action="{{ $project->path() . '/invitations' }}" method="POST">
        @csrf
        <input type="email" name="email" class="text-default-500 bg-card border border-gray-300 rounded p-2 mb-3 w-full" placeholder="e.g. john@example.com">
        <button type="submit" class="button button--blue">Invite</button>        
    </form>
    @include ('errors', ['bag' => 'invitations'])
</div>