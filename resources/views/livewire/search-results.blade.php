<div>
    <!-- Search Results -->
    @if (count($results) > 0)
        <div class="space-y-4">
            {{-- <div class="flex justify-end mb-4">
                <button
                    type="button"
                    wire:click="$dispatch('search:clear-results')"
                    class="w-8 h-8 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-full flex items-center justify-center transition duration-200 hover:text-gray-800"
                >
                    x
                </button>
            </div> --}}
            @foreach ($results as $result)
                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">
                        <a wire:navigate href="/articles/{{ $result->id }}">{{ $result->title }}</a>
                    </h3>
                    <p class="text-gray-600 text-sm">
                        {{ Str::limit($result->content, 150) }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif
</div>
