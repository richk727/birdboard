<div class="card mt-3  mb-3">
    <ul class="text-xs list-reset">                
    @foreach ($project->activity as $activity)
        <li class="py-1 {{ $loop->last ? '' : 'border-b border-gray-100 mb-1' }}">
            @include ("projects.activity.$activity->description ")
            <span class="text-xxs block text-gray-500">{{ $activity->created_at->diffForHumans() }}</span>
        </li>
    @endforeach
    </ul>
</div>