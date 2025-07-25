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
                </div>
            </form>
        </div>
        <livewire:search-results :results="$results">
    </div>
</div>