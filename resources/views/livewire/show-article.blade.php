<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Navigation -->
        <div class="mb-6">
            <a href="/articles" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors duration-200">
                <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Articles
            </a>
        </div>

        <!-- Article Content -->
        <article class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-8">
                <!-- Article Title -->
                <header class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 leading-tight">{{ $article->title }}</h2>
                </header>

                <!-- Article Content -->
                <div class="prose prose-lg max-w-none">
                    <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                        {{ $article->content }}
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
