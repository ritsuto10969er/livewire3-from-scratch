<div>
    <form>
        <div class="mt-2">
            <div class="flex gap-2 items-center">
                <input 
                    type="text" 
                    class="flex-1 px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 placeholder-gray-400 bg-white transition duration-200"
                    wire:model.live='searchText'
                    placeholder="type something to search"
                >
                <button 
                    class="px-4 py-3 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg shadow-sm transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-400"
                    wire:click.prevent='clear()';
                >
                    
                    clear
                </button>
            </div>
        </div>
    </form>

    <div class="mt-4">
        @foreach ($results as $result)
            <div class="pt-2">
                {{ $result->title }}
            </div>
        @endforeach
    </div>
</div>