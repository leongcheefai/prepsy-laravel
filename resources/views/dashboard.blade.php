<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to Prepsy, ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('recipes.search') }}" class="space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="ingredients" :value="__('Ingredients')" />
                            <x-text-input id="ingredients" class="block mt-1 w-full" type="text" name="ingredients" :value="old('ingredients')" required autofocus />
                            <x-input-error :messages="$errors->get('ingredients')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>
                                {{ __('Find Recipes') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('recipes'))
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach(session('recipes') as $recipe)
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out cursor-pointer bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                        <div class="relative h-40 overflow-hidden">
                            <img
                                class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
                                src="{{ $recipe['image'] ?? 'https://placehold.co/600x300/e2e8f0/64748b?text=Recipe+Image' }}"
                                alt="{{ $recipe['title'] }}"
                                onerror="this.src='https://placehold.co/600x300/e2e8f0/64748b?text=Recipe+Image'"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-gray-900 dark:text-gray-100">{{ $recipe['title'] }}</div>
                            <p class="text-gray-700 dark:text-gray-300 text-base">
                                {{ $recipe['description'] }}
                            </p>
                        </div>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <span class="mr-2">🕒</span>
                                <span>Prep: {{ $recipe['prep_time'] }} | Cook: {{ $recipe['cook_time'] }}</span>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-600 dark:text-gray-400">
                                <span class="mr-2">📊</span>
                                <span>Difficulty: {{ $recipe['difficulty'] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
