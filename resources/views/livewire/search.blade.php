<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Article Search</h1>
            <p class="text-gray-600">Find articles by searching their titles</p>
        </div>

        <!-- Search Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
            <form>
                <div class="flex gap-3 items-center">
                    <div class="relative flex-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 placeholder-gray-400 bg-white transition duration-200"
                            wire:model.live='searchText'
                            placeholder="Search for articles..."
                        >
                    </div>
                    <button 
                        type="button"
                        class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg border border-gray-300 shadow-sm transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-400 whitespace-nowrap"
                        wire:click.prevent='clear()'
                    >
                        Clear
                    </button>
                </div>
            </form>
        </div>

        <!-- Search Results -->
        @if(count($results) > 0)
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">
                    Found {{ count($results) }} {{ count($results) === 1 ? 'article' : 'articles' }}
                </h2>
            </div>
            
            <div class="space-y-4">
                @foreach ($results as $result)
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition duration-200">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <h3 class="text-lg font-medium text-gray-900 mb-2">
                                    <a href="/articles/{{$result->id}}">{{ $result->title }}</a>
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-3">
                                    {{ Str::limit($result->content, 150) }}
                                </p>
                                <div class="mt-3 flex items-center text-xs text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $result->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif(!empty($searchText))
            <div class="text-center py-12">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656-5.656m0 0a4 4 0 015.656 5.656m-11.314 0a8 8 0 1111.314-11.314"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No articles found</h3>
                    <p class="text-gray-500">Try adjusting your search terms or browse all articles.</p>
                </div>
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Start searching</h3>
                    <p class="text-gray-500">Enter a search term above to find articles.</p>
                </div>
            </div>
        @endif
    </div>
</div>