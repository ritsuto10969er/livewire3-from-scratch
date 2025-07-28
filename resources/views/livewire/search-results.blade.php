<!-- Search Results Dropdown -->
@if (count($results) > 0)
    <div class="bg-white rounded-lg shadow-lg border border-gray-200 max-h-96 overflow-y-auto">
        <div class="p-2">
            <div class="text-xs text-gray-500 px-3 py-2 border-b border-gray-100">
                {{ count($results) }} {{ count($results) === 1 ? 'result' : 'results' }} found
            </div>
            @foreach ($results as $result)
                <div 
                    class="p-3 hover:bg-gray-50 border-b border-gray-100 last:border-b-0 cursor-pointer transition duration-150"
                    wire:key='{{$result->id}}'
                >
                    <h3 class="text-sm font-medium text-gray-900 mb-1">
                        <a href="/articles/{{ $result->id }}" class="hover:text-blue-600">
                            {{ $result->title }}
                        </a>
                    </h3>
                    <p class="text-xs text-gray-600 line-clamp-2">
                        {{ Str::limit($result->content, 100) }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endif
