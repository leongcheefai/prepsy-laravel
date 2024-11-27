<div class="w-1/2 mt-2 py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="search" class="space-y-6">
                    <input type="text" name="ingredients" wire:model="form.ingredients" class="block mt-1 w-full bg-gray-900 text-gray-900 dark:text-gray-900 rounded-lg" 
                    placeholder="Enter ingredients separated by commas" />

                    <button type="submit" class="bg-white text-gray-900 px-3 py-1 border rounded-md inline-flex items-center hover:bg-gray-100 transition duration-150 ease-in-out">
                        Find Recipes
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
