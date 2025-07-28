<!-- Compact Search Bar for Navigation -->
<div class="relative">
    <div class="flex items-center">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input 
                type="text" 
                class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 placeholder-gray-400 bg-white transition duration-200 text-sm"
                wire:model.live='searchText'
                placeholder="{{ $placeholder ?? 'Search...' }}"
            >
        </div>
    </div>
    
    <!-- Search Results Container - positioned absolutely below the search bar -->
    @if (!empty($results))
        <div class="absolute top-full right-0 mt-2 w-96 z-50">
            <livewire:search-results :results="$results">
        </div>
    @endif
</div>