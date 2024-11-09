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
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach(session('recipes') as $recipe)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out cursor-pointer bg-white dark:bg-gray-800">
                        <!-- <img class="w-full" src="" alt="Thumbnail"> -->
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-gray-900 dark:text-gray-100">{{ $recipe['title'] }}</div>
                            <p class="text-gray-700 dark:text-gray-300 text-base">
                                {{ $recipe['description'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    @endif
</x-app-layout>
