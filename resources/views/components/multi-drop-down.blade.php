<div>
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif
    
    <select
        name="{{ $name }}"
        id="{{ $id }}"
        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
    >
        @if($placeholder)
            <option value="" disabled {{ $selected ? '' : 'selected' }}>{{ $placeholder }}</option>
        @endif

        @foreach($options as $id => $name)
            <option 
                value="{{ $id }}"
                {{ $selected === $id ? 'selected' : '' }}
            >
                {{ $name }}
            </option>
        @endforeach
    </select>
    
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>