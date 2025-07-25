<div>
    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-2">
            <select
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900"
                wire:model.fill='greeting'
            >
                @foreach ($greetings as $item)
                    <option value="{{ $item-> greeting }}">
                        {{ $item->greeting }}
                    </option>
                @endforeach
            </select>
            
            <input 
                type="text" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 placeholder-gray-500"
                wire:model = 'name'
            >
        </div>
        <div>
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2">
            <button 
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-200 ease-in-out"
            >
                Greet
            </button>
        </div>
    </form>
    @if ($greetingMessage !== '')
    <div>
        {{ $greetingMessage }};
    </div>
    @endif
</div>