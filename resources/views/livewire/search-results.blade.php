<div>
    <!-- Search Results -->
    @if (count($results) > 0)
        <div class="space-y-4">
            @foreach ($results as $result)
                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">
                        <a href="/articles/{{ $result->id }}">{{ $result->title }}</a>
                    </h3>
                    <p class="text-gray-600 text-sm">
                        {{ Str::limit($result->content, 150) }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif
</div>
