<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$this->title}}</div>
        <p class="text-gray-700 text-base">
            {{$payload}}
        </p>
    </div>
    <div class="px-6 pt-4 pb-2">
        @forelse ($tags as $tag)
        @if($loop->count <= 3) <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            #{{$tag->name}}</span>
            @else
            ...
            @break
            @endif
            @empty
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-400 mr-2 mb-2">No
                associated tags...</span>
            @endforelse
    </div>
</div>
