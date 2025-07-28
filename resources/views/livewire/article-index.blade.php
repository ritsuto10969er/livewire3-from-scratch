<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Articles</h1>
            <p class="text-gray-600">You can browse all articles</p>
        </div>

        <!-- Articles Grid -->
        <div class="grid gap-6 md:gap-8">
            @foreach ($articles as $article)
                <article class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-300 overflow-hidden">
                    <div class="p-6" wire:key='{{$article->id}}'>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                            <a href="/articles/{{ $article->id }}" class="hover:text-blue-600 transition-colors duration-200">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 leading-relaxed line-clamp-3">
                            {{ str($article->content)->words(30) }}
                        </p>
                        <div class="mt-4 flex items-center justify-between">
                            <a href="/articles/{{ $article->id }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors duration-200">
                                Read more
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        @if(count($articles) === 0)
            <div class="text-center py-12">
                <div class="w-24 h-24 mx-auto mb-4 text-gray-300">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No articles available</h3>
                <p class="text-gray-500">No articles have been posted yet.</p>
            </div>
        @endif
    </div>
</div>
