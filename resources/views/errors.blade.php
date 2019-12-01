@if ($errors->{ $bag ?? 'default' }->any())
    <div class="field mt-6">
        @foreach ($errors->{ $bag ?? 'default' }->all() as $error)
            <p class="p-2 text-white bg-red-500 mb-2">{{ $error }}</p>
        @endforeach 
    </div>
@endif