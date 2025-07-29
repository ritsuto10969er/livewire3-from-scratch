<div class="m-auto w-1/2 mt-4">
    <div class="mb-3">
        <a 
            href="/dashboard/articles/create"
            class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium text-sm rounded-lg shadow-sm transition-colors duration-200"
            wire:navigate
        >
            Create Article
        </a>
    </div>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{$article->id}}" class="border-b hover:bg-gray-50">
                    <td class="px-6 py-3">{{ $article->title }}</td>
                    <td class="px-6 py-3">
                        <div class="flex space-x-2">
                            <a href="/dashboard/articles/{{$article->id}}/edit" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded text-sm font-medium transition-colors duration-200"
                               wire:navigate
                            >
                                Edit
                            </a>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm font-medium transition-colors duration-200"
                                    wire:click='delete({{$article->id}})'
                                    wire:confirm='Are you sure you want to delete this article?'
                            >
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
