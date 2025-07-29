<div>
    <div  class="m-auto w-1/2 mb-4">
        <h3 class="text-2xl font-bold mb-4">Create Article</h3>
        <form wire:submit='save'>
            <div class="mb-4">
                <label for="article-title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input 
                    type="text"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    wire:model='form.title'
                >
                <div>
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="article-content" class="block text-sm font-medium text-gray-700 mb-2">
                    Content
                </label>
                <textarea name="article-content" id="article-content"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 h-32 resize-vertical"
                    wire:model='form.content'    
                ></textarea>
                <div>
                    @error('content')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded-lg shadow-sm transition-colors duration-200"
                        type="submit"
                    >
                        Save    
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
