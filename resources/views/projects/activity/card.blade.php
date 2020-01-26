<div class="card mt-3  mb-3">
    <ul class="text-xs list-reset">                
    @foreach ($project->activity as $activity)
        <li class="py-1 text-default-700 {{ $loop->last ? '' : 'border-b border-gray-100 mb-1' }}">
            @include ("projects.activity.$activity->description ")
            <span class="text-xxs block text-default-500">{{ $activity->created_at->diffForHumans() }}</span>
        </li>
    @endforeach
    </ul>
</div>