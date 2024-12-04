<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to Prepsy, ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <livewire:search-recipe />

    <livewire:recipe-list :$recipes />
</div>
