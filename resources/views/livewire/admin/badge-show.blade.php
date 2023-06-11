<div class="bg-white rounded-lg flex justify-center">
    @forelse($badges as $badge)
        <span class=" inline-block text-white-500">
            <span class="top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none transform translate-x-1/2 -translate-y-1/2 bg-indigo-50 rounded-full">
                <span class="mr-2">{{$badge->name}}</span>
                <img class="w-8 h-8 fill-current" alt="{{$badge->name}}" src="{{ asset('storage/'. $badge->image)}}">
            </span>
        </span>
    @empty
    @endforelse
</div>
