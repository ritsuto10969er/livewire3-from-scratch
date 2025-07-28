<div class="m-auto w-1/2 mt-4">
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
                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm font-medium transition-colors duration-200"
                                wire:click='delete({{$article->id}})'
                                wire:confirm='Are you sure you want to delete this article?'
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
